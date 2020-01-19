$( document ).ready( function(  ) {
    //
    /*$( 'input.selected' ).on( 'change', function(  ) {
        $( 'input.selected' ).is( this ).prop( == false 'checked', false );  
    } );*/

    $( "#id_true" ).click( function(  ) {
        if ( $( this ).is( ':checked' )  ) {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        } else if ( $( "#id_true5" ).is( ':checked' ) && $( "#id_true6" ).is( ':checked' ) && $( "#id_true7" ).is( ':checked' ) && $( "#id_true8" ).is( ':checked' )  && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true2" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true4" ).is( ':checked' ) == false  ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        }
     } );
     $( "#id_true2" ).click( function(  ) {
        if ( $( this ).is( ':checked' )  ) {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        } else if ( $( "#id_true5" ).is( ':checked' ) && $( "#id_true6" ).is( ':checked' ) && $( "#id_true7" ).is( ':checked' ) && $( "#id_true8" ).is( ':checked' )  && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true2" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true4" ).is( ':checked' ) == false  ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        }
     } );
     $( "#id_true3" ).click( function(  ) {
        if ( $( this ).is( ':checked' )  ) {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        } else if ( $( "#id_true5" ).is( ':checked' ) && $( "#id_true6" ).is( ':checked' ) && $( "#id_true7" ).is( ':checked' ) && $( "#id_true8" ).is( ':checked' )  && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true2" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true4" ).is( ':checked' ) == false  ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        }
     } );
     $( "#id_true4" ).click( function(  ) {
        if ( $( this ).is( ':checked' )  ) {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        } else if ( $( "#id_true5" ).is( ':checked' ) && $( "#id_true6" ).is( ':checked' ) && $( "#id_true7" ).is( ':checked' ) && $( "#id_true8" ).is( ':checked' )  && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true2" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true4" ).is( ':checked' ) == false  ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        }
     } );
     $( "#id_true5" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) && $( "#id_true6" ).is( ':checked' ) && $( "#id_true7" ).is( ':checked' ) && $( "#id_true8" ).is( ':checked' )  && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true2" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true4" ).is( ':checked' ) == false  ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        } else {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        }
     } );
     $( "#id_true6" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) && $( "#id_true5" ).is( ':checked' ) && $( "#id_true7" ).is( ':checked' ) && $( "#id_true8" ).is( ':checked' )  && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true2" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true4" ).is( ':checked' ) == false  ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        } else {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        }
     } );
     $( "#id_true7" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) && $( "#id_true5" ).is( ':checked' ) && $( "#id_true6" ).is( ':checked' ) && $( "#id_true8" ).is( ':checked' )  && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true2" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true4" ).is( ':checked' ) == false  ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        } else {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        }
     } );
     $( "#id_true8" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) && $( "#id_true5" ).is( ':checked' ) && $( "#id_true6" ).is( ':checked' ) && $( "#id_true7" ).is( ':checked' )  && $( "#id_true" ).is( ':checked' ) == false && $( "#id_true2" ).is( ':checked' ) == false && $( "#id_true3" ).is( ':checked' ) == false && $( "#id_true4" ).is( ':checked' ) == false  ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        } else {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        }
     } );

} );