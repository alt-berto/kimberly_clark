$( document ).ready( function(  ) {
    //
    let audio = document.getElementById("myAudio");
    let uno = document.getElementById("my_uno");
    let dos = document.getElementById("my_dos");
    let tres  = document.getElementById("my_tres");
    let cuatro = document.getElementById("my_cuatro");

    //
    function stop(  ) {
      audio.pause(  );
      uno.pause(  );
      dos.pause(  );
      tres.pause(  );
      cuatro.pause(  );
;
    }
    //
    function doBounce( element, times, distance, speed ) {
        for( i = 0; i < times; i++ ) {
            element.animate( { marginTop: '-='+distance }, speed )
                .animate( { marginTop: '+='+distance }, speed );
        }        
    } 
    //
    $( "#uno" ).click( function(  ) {    
      //
      $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            /*$( ".mainInfo" ).empty();
            $( ".mainInfo" ).append( `<p>
                .
            </p>` );*/
            doBounce( $( ".mainInfo" ), 3, '10px', 300 );
            //
            $( this ).toggleClass( "stop" );
            let className = $( this ).attr( 'class' );        
            if ( className.includes( 'stop' ) ) {
                uno.play(  );
            } else {
                stop(  );
            }        
            return false;
       } );
    } ) ;
    //
    $( "#dos" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            /*$( ".mainInfo" ).empty();
            $( ".mainInfo" ).append( `<p>
                .
            </p>` );*/
            doBounce( $( ".mainInfo" ), 3, '10px', 300 );
            //
            $( this ).toggleClass( "stop" );
            let className = $( this ).attr( 'class' );        
            if ( className.includes( 'stop' ) ) {
                dos.play(  );
            } else {
                stop(  );
            }        
            return false;
        } );
    } ) ;
    //
    $( "#tres" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            /*$( ".mainInfo" ).empty();
            $( ".mainInfo" ).append( `<p>
                .
            </p>` );*/
            doBounce( $( ".mainInfo" ), 3, '10px', 300 );
            //
            $( this ).toggleClass( "stop" );
            let className = $( this ).attr( 'class' );        
            if ( className.includes( 'stop' ) ) {
                tres.play(  );
            } else {
                stop(  );
            }        
            return false;
        } );
    } );
    //
    $( "#cuatro" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            /*$( ".mainInfo" ).empty();
            $( ".mainInfo" ).append( `<p>
                .
            </p>` );*/
            doBounce( $( ".mainInfo" ), 3, '10px', 300 );
            //
            $( this ).toggleClass( "stop" );
            let className = $( this ).attr( 'class' );        
            if ( className.includes( 'stop' ) ) {
                cuatro.play(  );
            } else {
                stop(  );
            }        
            return false;
        } );
    } ) ;
    //
    
  
  } );