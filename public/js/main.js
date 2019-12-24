$( document ).ready( function(  ) {
    //
    let audio = document.getElementById("myAudio");
    audio.play(  );
    $( document ).ready( function(  ) {
        let btn = $( "#btn_audio" );        
        //
        btn.click( function(  ) {            
          btn.toggleClass( "paused" );
            audio.play(  );
            return false;
        } );
    } );
} );