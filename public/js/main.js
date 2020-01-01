$( document ).ready( function(  ) {
    //
    let audio = document.getElementById("myAudio");
    audio.play(  );
    $( document ).ready( function(  ) {
        let btn = $( "#btn_audio" );        
        //
        btn.click( function(  ) {            
          btn.toggleClass( "paused" );
            let className = btn.attr( 'class' );
            console.log( 'clase: ' + className );
            if ( className.includes( 'paused' ) ) {
                audio.play(  );
            } else {
                audio.pause(  );
            }
            
            return false;
        } );
    } );
} );