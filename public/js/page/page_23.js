$( document ).ready( function(  ) {
    //
    let audio = document.getElementById("myAudio");
    let uno = document.getElementById("my_compras");
    let dos = document.getElementById("my_facturas");
    let tres  = document.getElementById("my_pagos");
    let cuatro = document.getElementById("my_reportes");
    //
    function stop(  ) {
      audio.pause(  );
      uno.pause(  );
      dos.pause(  );
      tres.pause(  );
      cuatro.pause(  );
    }
    //
    function doBounce( element, times, distance, speed ) {
        for( i = 0; i < times; i++ ) {
            element.animate( { marginTop: '-='+distance }, speed )
                .animate( { marginTop: '+='+distance }, speed );
        }        
    } 
    //
    $( "#compras" ).click( function(  ) {    
      //
      $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );            
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
    $( "#facturas" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );            
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
    $( "#pagos" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );            
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
    $( "#reportes" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );            
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