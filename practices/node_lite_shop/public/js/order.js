const cartOrder = document.querySelector( '#lite-shop-order' );

if ( cartOrder != null ) {
    this.onsubmit = function( event ) {
        event.preventDefault();

        let name = document.querySelector( '#user_name' ).value.trim();
        let phone = document.querySelector( '#user_phone' ).value.trim();
        let mail = document.querySelector( '#user_mail' ).value.trim();
        let address = document.querySelector( '#user_address' ).value.trim();
        let terms = document.querySelector( '#user_terms' ).value.trim();

        if ( ! document.querySelector( '#user_terms' ).checked ) {
            // not check terms;
            swal.fire({
                title: 'warning',
                text: 'read & accept the terms',
                type: 'info',
                confirmButtonText: 'Ok'
            });
            return false;
        };

        if ( name == '' || phone == '' || mail == '' || address == '' ) {
            swal.fire({
                title: 'warning',
                text: 'fill all fields',
                type: 'info',
                confirmButtonText: 'Ok'
            });
            return false;
        };

        fetch( '/finish-order', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json'
            },
            body: JSON.stringify({
                'userValue' : name,
                'phoneValue' : phone,
                'mailValue' : mail,
                'addressValue' : address,
                'cartProducts' : JSON.parse( localStorage.getItem( 'cart' ) )
            })
        })
        .then( function( response ) {
            return response.text();
        })
        .then( function( body ) {
            if ( body == 1 ) {
                swal.fire({
                    title: 'Success',
                    text: 'success',
                    type: 'info',
                    confirmButtonText: 'Ok'
                });
                return false;
            }
            else {
                swal.fire({
                    title: 'Problem with mail',
                    text: 'Error',
                    type: 'error',
                    confirmButtonText: 'Ok'
                });
            }
        });
    };
};
