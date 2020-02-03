$( document ).ready( function(  ) {
    //
    let base_url = window.location.protocol + "//" + window.location.host + "/";
    $( '#prevPage' ).addClass( 'disabled' );
    //
    if ( localStorage.getItem( 'email' ) == null || localStorage.getItem( 'name' ) == null ) {
        window.location.href = base_url + 'page/35';
    }
    //
    if ( localStorage.getItem( 'page_36' ) == null ) {                
        window.location.href = base_url + 'page/36';
    }
    if ( localStorage.getItem( 'page_37' ) == null ) {                
        window.location.href = base_url + 'page/37';
    }
    if ( localStorage.getItem( 'page_38' ) == null ) {                
        window.location.href = base_url + 'page/38';
    }
    if ( localStorage.getItem( 'page_39' ) == null ) {
        window.location.href = base_url + 'page/39';
    }
    if ( localStorage.getItem( 'page_40' ) == null ) {                
        window.location.href = base_url + 'page/40';
    }
   
    result(  );
    send_mail(  );
    function result(  ) {
        let count = 0;
        if ( localStorage.getItem( 'page_36' ) == 'true' ) {                
           count++;
        }
        if ( localStorage.getItem( 'page_37' ) == 'true' ) {                
            count++;
         }
         if ( localStorage.getItem( 'page_38' ) == 'true' ) {                
            count++;
         }
         if ( localStorage.getItem( 'page_39' ) == 'true' ) {                
            count++;
         }
         if ( localStorage.getItem( 'page_40' ) == 'true' ) {                
            count++;
         }
         //
         let result = ( count / 5 ) * 100;
         localStorage.setItem( 'result', result );
         let text = '';
         if ( result <= 70 ) {
            text = "Su Nota es: <b>"+ result + "%</b><br/> Gran Avance, sabemos que repasando los módulos vas a lograr el 70% requerido para aprobar el curso en la próxima ocasión. Vamos juntos por ese 70%.";
         } else {
            text = "Su Nota es: <b>"+ result + "%</b><br/> Excelente resultado!! Felicitaciones, ahora eres todo un conocedor del Cash Conversion Cycle y estás listo para seguir apoyándonos a mejorar el Indicador dentro de K-C.";
         }
         $('#message').append( text );

    }

    function send_mail(  ) {  
        if ( localStorage.getItem( 'mail_status' ) != 'true' ) {     
            $.ajax( {
                url: base_url + "send/email",
                type: "get",
                data: {
                    name: localStorage.getItem( 'name' ),
                    mail: localStorage.getItem( 'email' ),
                    note: localStorage.getItem( 'result' )
                },
                success: function ( response)  {
                    localStorage.setItem( 'mail_status', true );                    
                    console.log( 'email sent!.' );
                // You will get response from your PHP page (what you echo or print)
                },
                error: function( jqXHR, textStatus, errorThrown ) {
                    console.log( textStatus, errorThrown );
                }
            } );
        }
    }
        
    
} );