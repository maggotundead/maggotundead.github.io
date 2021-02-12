const menuNavButton = document.querySelector( '.toggle-navigation');
const menuNav = document.querySelector( '.product-navigation' );

menuNavButton.addEventListener( 'click', function () {
    console.log( 'click' );
    toggleText( menuNavButton, 'close nav', 'open nav' );
    toggleNav( menuNav, 'left', '-600px', '0px' );
});

function toggleNav( el, prop, state1, state2 ) {
    el.style[prop] = el.style[prop] === state1 ? state2 : state1;
};

function toggleText( el, state1, state2 ) {
    el.textContent = el.textContent === state1 ? state2 : state1;
};

function getCategoryList() {
    fetch( '/get-category-list', {
        method: 'POST'    
    })
    .then( function( response ) {
        return response.text();
    })
    .then( function( body ) {
        showCategoryList( JSON.parse( body ) );
        console.log( body );
    });
};

function showCategoryList( data ) {
    // console.log( data );
    let out = '<ul class="category-list"><li><a href="/">Main</a></li>';
    for ( let i = 0; i < data.length; i++ ) {
        out += '<li><a href="/category?id=' + data[i]['id'] + '">' + data[i]['category'] + '</a></li>'
    };
    out += '</ul>';

    document.querySelector( '#category-list' ).innerHTML = out;
};

getCategoryList();
