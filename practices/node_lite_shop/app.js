const express = require( 'express' );
const mysql = require( 'mysql' );
const app = express();
const nodemailer = require( 'nodemailer' );

let connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'qwer1234',
    database: 'market'
});
connection.connect();

app.use( express.static( 'public' ) );
app.use( express.json() );



app.set( 'view engine', 'pug' );

app.listen( 3000, function() {});

app.get( '/', function( request, response ) {
    console.log('main page');
    let categoryLastProducts = new Promise( function( resolve, reject ) {
        connection.query(
            "SELECT id, name, cost, image, category from (select id, name, cost, image, category, if(if(@curr_category != category, @curr_category := category, '' ) != '', @k:= 0, @k:= @k + 1 ) as ind from goods, ( select @curr_category:= '' ) v ) goods where ind < 3 order by cost desc",
            function( error, result, field ) {
                if ( error ) return reject( error );
                resolve( result );
            }
        );
    });
    let categoryDescription = new Promise( function( resolve, reject ) {
        connection.query(
            'SELECT * from category',
            function( error, result, field ) {
                if ( error ) return reject( error );
                resolve( result );
            }
        );
    });
    Promise.all( [categoryLastProducts, categoryDescription] ).then( function( value ) {
        response.render( 'index', {
            goods: JSON.parse( JSON.stringify( value[0] ) ),
            categoryLastProducts: JSON.parse( JSON.stringify( value[1] ) )
        });
    });
});

app.get( '/category', function( request, response ) {
    let categoryId = request.query.id;
    let category = new Promise( function( resolve, reject ) {
        connection.query(
            'SELECT * FROM category WHERE id=' + categoryId,
            function( error, result ) {
                if ( error ) reject( error );
                resolve( result );
            }
        );
    });
    let goods = new Promise(function( resolve, reject ) {
        connection.query(
            'SELECT * FROM goods WHERE category=' + categoryId,

            function( error, result ) {
                if ( error ) reject( error );
                resolve( result );
            }
        );
    });
    Promise.all( [category, goods] ).then( function( value ) {
        response.render( 'category', {
            category: JSON.parse( JSON.stringify( value[0] ) ),
            goods: JSON.parse( JSON.stringify( value[1] ) )
        });
    });
});

app.get( '/product', function( request, response ) {
    let productId = request.query.id;
    connection.query( 'SELECT * FROM goods WHERE id=' + productId, function( error, result, fields ) {
        if ( error ) throw error;
        response.render( 'product', {
            goods: JSON.parse( JSON.stringify( result ) )
        });
    });
});

app.get( '/order', function( request, response ) {
    response.render( 'order' );
});

app.post( '/get-category-list', function( request, response ) {
    connection.query( 'SELECT id, category FROM category', function( error, result, fields ) {
        if ( error ) throw error;
        response.json( result );
    });
});

app.post( '/get-goods-info', function( request, response ) {
    if( request.body.productId.length != 0 ) {
        connection.query( 'SELECT id, name, cost, image FROM goods WHERE id IN (' + request.body.productId.join(',') + ')', function( error, result, fields ) {
            if (error) throw error;
            let goods = {};
            for ( let i=0; i < result.length; i++ ) {
                goods[ result[i]['id'] ] = result[i];
            };
            response.json( goods );
        });
    }
    else {
        response.send('0');
    }
});

app.post( '/finish-order', function( request, response ) {
    if ( request.body.cartProducts.length != 0 ) {
        let productId = Object.keys( request.body.cartProducts );
        let productQuantity = Object.values( request.body.cartProducts );
        connection.query( 'SELECT id, name, cost FROM goods WHERE id IN (' + productId.join(',') + ')', function( error, result, fields ) {
            if (error) throw error;
            sendMail(request.body, result).catch( console.error );
            // sendMail(request.body, result);
            let cartProducts = {};
            for ( let i=0; i < result.length; i++ ) {
                cartProducts[ result[i]['id'] ] = result[i];
            };
        });

    }
    else {
        response.send('0');
    }
});

async function sendMail(data, result) {
    let mail = `<h2>Order in lite shop</h2>`;

    let total = 0;
    console.log(data, result);
    for ( let i = 0; i < result.length; i++ ) {
        mail += `<p>${ result[i]['name'] } - quantity: ${ data.cartProducts[result[i]['id']] } - total in product:  ${ result[i]['cost'] * data.cartProducts[result[i]['id']] } uah</p>`
        total += result[i]['cost'] * data.cartProducts[ result[i]['id'] ];
    };
    mail += `<hr>`;
    mail += `<p>Total: ${ total }uah</p>`;
    mail += `<p>Client: ${ data['userValue'] }</p>`;
    mail += `<p>CLeint\'s phone: ${ data['phoneValue'] }</p>`;
    mail += `<p>Client\'s mail: ${ data['mailValue'] }</p>`;
    mail += `<p>Client\'s address: ${ data['addressValue'] }</p>`;

    console.log(data, mail, total );

    let testAccount = await nodemailer.createTestAccount();

    let transporter = nodemailer.createTransport({
        host: "smtp.ethereal.email",
        port: 587,
        secure: false,
        auth: {
            user: testAccount.user, // generated ethereal user
            pass: testAccount.pass // generated ethereal password
        }
    });

    let mailOption = {
        from: 'maggotundead@yandex.ua',
        to: 'maggotundead@yandex.ua,' + data.mailValue,
        subject: 'Lite Shop Order',
        text: 'order from site',
        html: mail
    };

    let info = await transporter.sendMail(mailOption);

    console.log("Message sent: %s", info.messageId);

    console.log("Preview URL: %s", nodemailer.getTestMessageUrl(info));

    return true;
};
