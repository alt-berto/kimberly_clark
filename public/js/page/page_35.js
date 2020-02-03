$( document ).ready( function(  ) {
    //
    let base_url = window.location.protocol + "//" + window.location.host + "/";
    $( '#nextPage' ).addClass( 'disabled' );
    //
    $( "#desplegar" ).click( function(  ) {        

        localStorage.setItem( 'email', $( '#email' ).val(  ) );
        localStorage.setItem( 'name', $( '#name' ).val(  ) );
        
        $( '#nextPage' ).removeClass( 'disabled' );
        $( '#desplegar' ).prop( 'disabled', true );
        //
        var interval = setInterval( function(  ) {      
            window.location.href = base_url + 'page/36'      
        }, 1000 );
        
    } );
} );