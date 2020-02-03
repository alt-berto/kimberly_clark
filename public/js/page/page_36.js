$( document ).ready( function(  ) {
    //
    /*$( 'input.selected' ).on( 'change', function(  ) {
        $( 'input.selected' ).is( this ).prop( == false 'checked', false );  
    } );*/

    $( "#id_true" ).click( function(  ) {
        if ( $( this ).is( ':checked' )  ) {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        } else if ( $( "#id_true2" ).is( ':checked' ) && $( "#id_true4" ).is( ':checked' ) && $( "#id_true5" ).is( ':checked' ) && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true6" ).is( ':checked' )== false && $( "#id_true7" ).is( ':checked' ) == false  ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        }
     } );
     $( "#id_true2" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) && $( "#id_true4" ).is( ':checked' ) && $( "#id_true5" ).is( ':checked' ) && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true6" ).is( ':checked' )  == false && $( "#id_true7" ).is( ':checked' ) == false ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        } else {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        }
     } );
     $( "#id_true3" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) ) {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        } else if ( $( "#id_true2" ).is( ':checked' ) && $( "#id_true4" ).is( ':checked' ) && $( "#id_true5" ).is( ':checked' ) && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true6" ).is( ':checked' )  == false && $( "#id_true7" ).is( ':checked' ) == false ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        }
     } );
     $( "#id_true4" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) && $( "#id_true2" ).is( ':checked' ) && $( "#id_true5" ).is( ':checked' ) && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true6" ).is( ':checked' )  == false && $( "#id_true7" ).is( ':checked' ) == false ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        } else {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        }
     } );
     $( "#id_true5" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) && $( "#id_true2" ).is( ':checked' ) && $( "#id_true4" ).is( ':checked' ) && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true6" ).is( ':checked' )  == false && $( "#id_true7" ).is( ':checked' ) == false ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        } else {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        }
     } );
     $( "#id_true6" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) ) {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        } else if ( $( "#id_true2" ).is( ':checked' ) && $( "#id_true4" ).is( ':checked' ) && $( "#id_true5" ).is( ':checked' ) && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true6" ).is( ':checked' )  == false && $( "#id_true7" ).is( ':checked' ) == false ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        }
     } );
     $( "#id_true7" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) ) {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        } else if ( $( "#id_true2" ).is( ':checked' ) && $( "#id_true4" ).is( ':checked' ) && $( "#id_true5" ).is( ':checked' ) && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true6" ).is( ':checked' )  == false && $( "#id_true7" ).is( ':checked' ) == false ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        }
     } );
     //
     $( '#nextPage' ).addClass( 'disabled' );
     //
     $( "#desplegar" ).click( function(  ) {
         alert($( "#desplegar" ).attr( "data-target" ));
        if ( $( "#desplegar" ).attr( "data-target" ) == '#falseModal' ) {
            localStorage.setItem( 'page_36', false );
        } else {
            localStorage.setItem( 'page_36', true );
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
      if ( localStorage.getItem( 'page_36' ) != null ) {                
        window.location.href = base_url + 'page/37';
      }

      if ( localStorage.getItem( 'email' ) == null || localStorage.getItem( 'name' ) == null ) {
        window.location.href = base_url + 'page/35';
      }



} );