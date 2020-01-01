$( document ).ready( function(  ) {
  //
  let audio = document.getElementById("myAudio");
  let ventas = document.getElementById("my_ventas");
  let apply = document.getElementById("my_apply");
  let resolucion  = document.getElementById("my_resolucion");
  let recaudo = document.getElementById("my_recaudo");
  let facturacion = document.getElementById("my_facturacion");
  let orden = document.getElementById("my_orden");
  let credito = document.getElementById("my_adminCredit");
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
          El proceso inicia cuando el departamento de ventas identifica una nueva oportunidad de negocio para generar valor a la organización.
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
          Una vez el cliente realiza el pago, el departamento de Cash Application se encarga de asignar el pago en la cuenta de balance del cliente y realizar su aplicación según la confirmación u orden de pago emitida por el cliente.
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
          Cuando el proceso de cobro se ve demorado o impactado por algún tema de disputa (diferencia de precio, devoluciones, entre otros), el departamento de Crédito y Cobranza, soportado por las demás áreas, se encarga de su seguimiento y resolución.
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
              Según el plazo determinado al cliente y las condiciones de pago (anticipado, crédito o contra entrega), el departamento de Crédito y Cobranza inicia la labor de cobro por parte del cliente.
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
            El departamento de Supply Chain se encarga de asignar el inventario, las citas y gestionar la facturación según la solicitud del cliente.
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
            Una vez creado el cliente en sistema y con la línea de crédito/términos de pago y demás asignados de acuerdo con la segmentación del cliente, el departamento comercial ingresa la primera orden de compra.
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
$( "#adminCredit" ).click( function(  ) {    
    //
    $( this ).click( function(  ) {
        $( "#btn_audio" ).removeClass( "paused" );
        stop(  );
        doBounce( $( this ), 3, '10px', 300 );
        $( ".mainInfo" ).empty();
        $( ".mainInfo" ).append( `<p>
            En caso de un cliente nuevo, con la información y formularios de inscripción diligenciados, el departamento de Crédito y Cobranza inicia la verificación y estudio de crédito del cliente cuidando los lineamientos corporativos. SI es cliente antiguo se hace la evaluación de crédito según su comportamiento de pagos y otros criterios.
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