$( document ).ready( function(  ) {
    //
    let audio = document.getElementById("myAudio");
    let diagnostico = document.getElementById("my_diagnostico");
    let diseno = document.getElementById("my_diseno");
    let ejecucion  = document.getElementById("my_ejecucion");
    let evaluacion = document.getElementById("my_evaluacion");

    //
    function stop(  ) {
      audio.pause(  );
      diagnostico.pause(  );
      diseno.pause(  );
      ejecucion.pause(  );
      evaluacion.pause(  );
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
    $( "#diagnostico" ).click( function(  ) {    
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
                diagnostico.play(  );
            } else {
                stop(  );
            }        
            return false;
       } );
    } ) ;
    //
    $( "#diseno" ).click( function(  ) {    
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
                diseno.play(  );
            } else {
                stop(  );
            }        
            return false;
        } );
    } ) ;
    //
    $( "#ejecucion" ).click( function(  ) {    
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
                ejecucion.play(  );
            } else {
                stop(  );
            }        
            return false;
        } );
    } );
    //
    $( "#evaluacion" ).click( function(  ) {    
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
                evaluacion.play(  );
            } else {
                stop(  );
            }        
            return false;
        } );
    } ) ;
    //
    
  
  } );