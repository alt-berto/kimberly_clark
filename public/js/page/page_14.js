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
            $( ".mainInfo" ).empty();
            $( ".mainInfo" ).append( `<p>
                Según la estrategia comercial, marketing y corporativa en general, se hace una alineación de cuáles son los productos o referencias principales para la venta.
            </p>` );
            doBounce( $( ".mainInfo" ), 3, '10px', 300 );
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
            $( ".mainInfo" ).empty();
            $( ".mainInfo" ).append( `<p>
                El departamento de transportes se encarga de recoger el producto terminado y hacer la entrega de los mismos hasta las bodegas o centros de distribución de nuestros clientes, quienes a su vez lo comercializarán a nuestros consumidores para hacer realidad la visión de nuestra compañía: Liderando el mundo en productos esenciales para una vida mejor.
            </p>` );
            doBounce( $( ".mainInfo" ), 3, '10px', 300 );
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
            $( ".mainInfo" ).empty();
            $( ".mainInfo" ).append( `<p>
                Una vez el producto está debidamente empacado y verificado, se almacena en las bodegas de la compañía esperando a que se llegue el momento preciso para la entrega al cliente.
            </p>` );
            doBounce( $( ".mainInfo" ), 3, '10px', 300 );
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
            $( ".mainInfo" ).empty();
            $( ".mainInfo" ).append( `<p>
                En paralelo con los pasos anteriores, las plantas de producción comienzan con el proceso de fabricación y empaque administrando los insumos recibiendo y siendo lo más eficientes posibles.
            </p>` );
            doBounce( $( ".mainInfo" ), 3, '10px', 300 );
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
            $( ".mainInfo" ).empty();
            $( ".mainInfo" ).append( `<p>
                El departamento de Servicio al Cliente se encarga de asignar las citas para la entrega y de coordinar con el departamento de transportes las fechas y lugares de entrega según disponibilidad de cada cliente.
            </p>` );
            doBounce( $( ".mainInfo" ), 3, '10px', 300 );
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
            $( ".mainInfo" ).empty();
            $( ".mainInfo" ).append( `<p>
                El departamento de ventas dependiendo de la estrategia comercial, se encarga de hacer la solicitud de productos para los clientes que atiende.
            </p>` );
            doBounce( $( ".mainInfo" ), 3, '10px', 300 );
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
            $( ".mainInfo" ).empty();
            $( ".mainInfo" ).append( `<p>
                Dependiendo del ciclo de venta, la estrategia y acompañamiento de publicidad y marketing, se elabora una proyección de cantidades y detalle de qué productos deberían producirse. Con esta información, los departamentos de compras y de manufactura comienzan a prepararse y solicitar los insumos correspondientes.
            </p>` );
            doBounce( $( ".mainInfo" ), 3, '10px', 300 );
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