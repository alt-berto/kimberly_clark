$( document ).ready( function(  ) {
    //
    let audio = document.getElementById("myAudio");
    let apply = document.getElementById("my_apply");    
    let recaudo = document.getElementById("my_recaudo");
    let facturacion = document.getElementById("my_facturacion");    
    let credito = document.getElementById("my_anticipo");
    //
    function stop(  ) {
      audio.pause(  );      
      apply.pause(  );
      recaudo.pause(  );
      facturacion.pause(  );
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
    $( "#apply" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            //$( ".mainCuentas" ).empty();
            //$( ".mainCuentas" ).append( `<p>
            //    Son las alícuotas que nuestros accionistas perciben por invertir en Kimberly Clark, incluso entre las mismas afiliadas.
            //</p>` );
            //doBounce( $( ".mainCuentas" ), 3, '10px', 300 );
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
    $( "#recaudo" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            //$( ".mainCuentas" ).empty();
            //$( ".mainCuentas" ).append( `<p>
            //    Son reservas que se hacen para cubrir los gastos futuros de prontos pago así como el riesgo de cobranza de determinados clientes en el futuro.
            //</p>` );
            //doBounce( $( ".mainCuentas" ), 3, '10px', 300 );
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
            //$( ".mainCuentas" ).empty();
            //$( ".mainCuentas" ).append( `<p>
            //    Como su nombre indica, son la venta de productos y préstamos a los empleados de Kimberly Clark de acuerdo con los beneficios establecidos.
            //</p>` );
            //doBounce( $( ".mainCuentas" ), 3, '10px', 300 );
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
    $( "#anticipo" ).click( function(  ) {    
        //
        $( this ).click( function(  ) {
            $( "#btn_audio" ).removeClass( "paused" );
            stop(  );
            doBounce( $( this ), 3, '10px', 300 );
            //$( ".mainCuentas" ).empty();
            //$( ".mainCuentas" ).append( `<p>
            //    Son adelantos a nuestros proveedores para que puedan iniciar la prestación de sus servicios o elaborar sus productos, actualmente ya no se ven como una Cuenta por Cobrar pero así era en el pasado.
            //</p>` );
            //doBounce( $( ".mainCuentas" ), 3, '10px', 300 );
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