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
    $( "#ventas" ).click( function(  ) {    
      let btn = $( "#ventas" );        
      //
      btn.click( function(  ) {            
        btn.toggleClass( "stop" );
          let className = btn.attr( 'class' );        
          if ( className.includes( 'stop' ) ) {
              ventas.play(  );
          } else {
              stop(  );
          }        
          return false;
      } );
    }) ;
  
  } );