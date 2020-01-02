$( document ).ready( function(  ) {
    //
    let audio = document.getElementById("myAudio");
    let ventas = document.getElementById("my_ventas");
    let apply = document.getElementById("my_apply");
    let resolucion  = document.getElementById("my_resolucion");
    let recaudo = document.getElementById("my_recaudo");
    let facturacion = document.getElementById("my_facturacion");
    let orden = document.getElementById("my_orden");
    let credito = document.getElementById("my_anticipo");
    //
    function stop(  ) {
      audio.pause(  );
      ventas.pause(  );
      apply.pause(  );
      resolucion.pause(  );
      recaudo.pause(  );
      facturacion.pause(  );
      orden.pause(  );
      credito.pause(  );
    }
    //
    function doBounce( element, times, distance, speed ) {
        for( i = 0; i < times; i++ ) {
            element.animate( { marginTop: '-='+distance }, speed )
                .animate( { marginTop: '+='+distance }, speed );
        }        
    } 
    //
    $( "#ventas" ).click( function(  ) {    
      //
      $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            /*$( ".mainCuentas" ).empty();
            $( ".mainCuentas" ).append( `<p>
                .
            </p>` );*/
            doBounce( $( ".mainCuentas" ), 3, '10px', 300 );
            //
            $( this ).toggleClass( "stop" );
            let className = $( this ).attr( 'class' );        
            if ( className.includes( 'stop' ) ) {
                ventas.play(  );
            } else {
                stop(  );
            }        
            return false;
       } );
    } ) ;
    //
    $( "#apply" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            /*$( ".mainCuentas" ).empty();
            $( ".mainCuentas" ).append( `<p>
                .
            </p>` );*/
            doBounce( $( ".mainCuentas" ), 3, '10px', 300 );
            //
            $( this ).toggleClass( "stop" );
            let className = $( this ).attr( 'class' );        
            if ( className.includes( 'stop' ) ) {
                apply.play(  );
            } else {
                stop(  );
            }        
            return false;
        } );
    } ) ;
    //
    $( "#resolucion" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            /*$( ".mainCuentas" ).empty();
            $( ".mainCuentas" ).append( `<p>
                .
            </p>` );*/
            doBounce( $( ".mainCuentas" ), 3, '10px', 300 );
            //
            $( this ).toggleClass( "stop" );
            let className = $( this ).attr( 'class' );        
            if ( className.includes( 'stop' ) ) {
                resolucion.play(  );
            } else {
                stop(  );
            }        
            return false;
        } );
    } );
    //
    $( "#recaudo" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            /*$( ".mainCuentas" ).empty();
            $( ".mainCuentas" ).append( `<p>
                .
            </p>` );*/
            doBounce( $( ".mainCuentas" ), 3, '10px', 300 );
            //
            $( this ).toggleClass( "stop" );
            let className = $( this ).attr( 'class' );        
            if ( className.includes( 'stop' ) ) {
                recaudo.play(  );
            } else {
                stop(  );
            }        
            return false;
        } );
    } ) ;
    //
    $( "#facturacion" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            /*$( ".mainCuentas" ).empty();
            $( ".mainCuentas" ).append( `<p>
                .
            </p>` );*/
            doBounce( $( ".mainCuentas" ), 3, '10px', 300 );
            //
            $( this ).toggleClass( "stop" );
            let className = $( this ).attr( 'class' );        
            if ( className.includes( 'stop' ) ) {
                facturacion.play(  );
            } else {
                stop(  );
            }        
            return false;
        } );
    } ) ;
    //
    $( "#orden" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            /*$( ".mainCuentas" ).empty();
            $( ".mainCuentas" ).append( `<p>
                .
            </p>` );*/
            doBounce( $( ".mainCuentas" ), 3, '10px', 300 );
            //
            $( this ).toggleClass( "stop" );
            let className = $( this ).attr( 'class' );        
            if ( className.includes( 'stop' ) ) {
                orden.play(  );
            } else {
                stop(  );
            }        
            return false;
        } );
    } ) ;
    //
    $( "#anticipo" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            /*$( ".mainCuentas" ).empty();
            $( ".mainCuentas" ).append( `<p>
                .
            </p>` );*/
            doBounce( $( ".mainCuentas" ), 3, '10px', 300 );
            //
            $( this ).toggleClass( "stop" );
            let className = $( this ).attr( 'class' );        
            if ( className.includes( 'stop' ) ) {
                credito.play(  );
            } else {
                stop(  );
            }        
            return false;
        } );
    } ) ;
  
  } );