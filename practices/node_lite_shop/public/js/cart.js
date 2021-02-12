let cart = {};

document.querySelectorAll( '.add-to-cart' ).forEach( function( element ) {
    element.onclick = addToCart;
});

if ( localStorage.getItem( 'cart' ) ) {
    cart = JSON.parse( localStorage.getItem( 'cart' ) );
    ajaxGetGoodsInfo();
};

function addToCart() {
    let goodsId = this.dataset.goods_id;
    if (cart[goodsId]) {
        cart[goodsId]++;
    }
    else {
        cart[goodsId] = 1;
    }
    console.log( cart );
    ajaxGetGoodsInfo();
};

function ajaxGetGoodsInfo() {
    updateLocalStorageCart();

    fetch('/get-goods-info', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-type': 'application/json'
        },
        body: JSON.stringify({
            productId: Object.keys( cart )
        })
    })
    .then(function( response ) {
        return response.text();
    })
    .then(function( body ) {
        console.log( body );
        showCart( JSON.parse( body ) );
    });
};

function showCart( cartDescription ) {
    let out = '<table class="table table-striped table-cart"><tbody>';
    let total = 0;


    for ( let key in cart ) {
        out += '<tr>';
        //////////////

        out += '<td><img src="/images/' + cartDescription[key]['image'] + '"></td>';
        out += '<td><a href="/product?id='+ key + '">' + cartDescription[key]['name'] + '</a></td>';
        out += '<td>' + cartDescription[key]['cost'] + '</td>';
        out +=
        '<td>'
            + '<button class="minus-product" data-goods_id="' + key + '">&nbsp;&nbsp;-&nbsp;&nbsp;</button>'
            + '<button class="plus-product" data-goods_id="' + key + '">&nbsp;&nbsp;+&nbsp;&nbsp;</button>'
        + '</td>';

        out += '<td>' + cart[key] + '</td>';
        out += '<td>' + formatPrice( cartDescription[key]['cost'] * cart[key] ) + ' uah</td>';
        out +=
        '<td>'
            + '<button class="remove-product" data-goods_id="' + key + '">&nbsp;&nbsp;X&nbsp;&nbsp;</button>'
        + '</td>';

        //////////////
        out += '</tr>';

        total += cart[key] * cartDescription[key]['cost'];
    };
    out += '<tr><td>' + formatPrice(total) + ' uah</td></tr>';
    out += '</tbody></table>';

    document.querySelector('#cart-products').innerHTML = out;

    document.querySelectorAll('.minus-product').forEach( function( element ) {
        element.onclick = minusProduct;
    });

    document.querySelectorAll('.plus-product').forEach( function( element ) {
        element.onclick = plusProduct;
    });

    document.querySelectorAll('.remove-product').forEach( function( element ) {
        element.onclick = removeProduct;
    });

};

function plusProduct() {
    let goodsId = this.dataset.goods_id;

    cart[goodsId]++;

    ajaxGetGoodsInfo();
};

function minusProduct() {
    let goodsId = this.dataset.goods_id;

    if ( cart[goodsId] > 1 ) {
        cart[goodsId]--;
    }
    else {
        cart[goodsId] = 1;
    };
    // if ( cart[goodsId] -1 > 0 ) {
    //     cart[goodsId]--;
    // }
    // else {
    //     delete( cart[goodsId] );
    // }

    ajaxGetGoodsInfo();
};

function removeProduct() {
    let goodsId = this.dataset.goods_id;

    delete( cart[goodsId] );

    ajaxGetGoodsInfo();
};

function updateLocalStorageCart() {
    localStorage.setItem('cart', JSON.stringify(cart) );
};


function formatPrice(price) {
    return price.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$& ');
};





