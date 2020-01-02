$( document ).ready( function(  ) {
    //
    /*$( 'input.selected' ).on( 'change', function(  ) {
        $( 'input.selected' ).not( this ).prop( 'checked', false );  
    } );*/

    $( "#id_true" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) && $( "#id_true3" ).is( ':checked' ) && $( "#id_true4" ).is( ':checked' )  ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        } else {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        }
     } );
     $( "#id_true2" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) ) {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        }
     } );
     $( "#id_true3" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) && $( "#id_true" ).is( ':checked' ) && $( "#id_true4" ).is( ':checked' )  ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        } else {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        }
     } );
     $( "#id_true4" ).click( function(  ) {
        if ( $( this ).is( ':checked' ) && $( "#id_true" ).is( ':checked' ) && $( "#id_true3" ).is( ':checked' )  ) {
            $( "#desplegar" ).attr("data-target", "#trueModal");
        } else {
            $( "#desplegar" ).attr("data-target", "#falseModal");
        }
     } );

} );