$( document ).ready( function(  ) {
    //
    $( 'input.selected' ).on( 'change', function(  ) {
        $( 'input.selected' ).not( this ).prop( 'checked', false );  
    } );

    $( "#id_true2" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        } else {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        }
     } );
     $( "#id_true" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) ) {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        } else {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        }
     } );
     //
     $( '#nextPage' ).addClass( 'disabled' );
     //
     $( "#desplegar" ).click( function(  ) {        
        if ( $( "#desplegar" ).attr( "data-target" ) == '#falseModal' ) {
            localStorage.setItem( 'page_37', false );
        } else {
            localStorage.setItem( 'page_37', true );
        }
        $( '#prevPage' ).addClass( 'disabled' );
        $( '#nextPage' ).removeClass( 'disabled' );
        //
        var interval = setInterval( function(  ) {
            $( '#desplegar' ).prop( 'disabled', true );
        }, 1200 );
        
      } );
      //
      let base_url = window.location.protocol + "//" + window.location.host + "/";
      if ( localStorage.getItem( 'page_36' ) == null ) {                
        window.location.href = base_url + 'page/36';
      }
      if ( localStorage.getItem( 'page_37' ) != null ) {                
        window.location.href = base_url + 'page/38';
      }

      if ( localStorage.getItem( 'email' ) == null || localStorage.getItem( 'name' ) == null ) {
        window.location.href = base_url + 'page/35';
      }

} );