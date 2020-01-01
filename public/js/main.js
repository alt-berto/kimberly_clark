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
            if ( className.includes( 'paused' ) ) {
                audio.play(  );
            } else {
                audio.pause(  );
            }
            
            return false;
        } );
    } );
} );