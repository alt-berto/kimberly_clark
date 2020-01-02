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

} );