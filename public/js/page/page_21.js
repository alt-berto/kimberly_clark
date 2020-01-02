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
                Dependiendo de la actividad de producción, funcionamiento y prácticamente necesidades en todos los departamentos y procesos de la compañía, surgen necesidades de insumos y/o servicios que se solicitan al departamento de compras para iniciar con el proceso y seleccionar los mejores en términos de tiempos, calidad y beneficios.
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
                Luego de verificar términos de pago y aprobaciones, se dará el pago al proveedor de acuerdo con la contra prestación percibida en tiempo y forma, concluyendo el objeto de la negociación por el requerimiento solicitado.
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
                El proveedor debe radicar en la compañía las facturas correspondientes a la prestación de servicios o intercambio de productos ejecutados. De manera tal que inicia el proceso de pago al interior de la compañía.
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
                Una vez recibidos los productos o prestados los servicios, los encargados o beneficiarios de los mismos deben indicar su conformidad con la contraprestación de manera tal que se asegura la calidad de la misma para, posteriormente, aprobar la conclusión.
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
                Posterior a la creación de los proveedores se da la requisición del producto o servicio para que según los tiempos negociados, el proveedor pueda hacer la entrega del producto o prestación del servicio acordado.
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
                Una vez seleccionado el proveedor, se inicia el proceso de creación y verificación al interior de la compañía y de acuerdo con los lineamientos corporativos.
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
                Según la disponibilidad del servicio se invitan varios proveedores para concursar con su portafolio, de manera tal que se tiene una propuesta múltiple para comparar los mejores servicios y/o productos ofrecidos en el mercado.
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