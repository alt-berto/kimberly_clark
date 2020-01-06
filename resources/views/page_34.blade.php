
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <side-menu-component page-num="{{ $page }}"></side-menu-component>
        <!-- -->
        <div id="content-wrapper">
            <nav class="navbar static-top">    
                <h1 class="mainTitle">¿Por qué se presta atención a la liquidez?</h1>    
            </nav>
            <div class="container-fluid colorBoxes resultsFinal">
                <div class="boxes row">
                    <div class="col-md-3 boxMain greenBox1">
                        <p>Pensar, erróneamente,
                            que la historia se repita.
                            Sólo porque una herramienta haya funcionado en el pasado, no significa que vaya a hacerlo en el futuro.
                        </p>
                    </div>
                    <div class="col-md-3 animated pulse boxMain greenBox2">
                        <p>Hacer menos por
                            hacer más:
                            hacer todo al mismo tiempo  y no concluir nada.

                        </p>
                    </div>
                    <div class="col-md-3 boxMain greenBox3">
                    <p>Empezar la segmentación
                        de clientes desde el resultado hacia la planeación
                        y no al revés.
                    </p>
                    </div>
                    <div class="col-md-3 boxMain greenBox4">

                        <p>Pensar que el plan debe desarrollarse a cabalidad:
                            no tendría sentido implementar una metodología de pago anticipado o contra entrega, si el mercado no está configurado de esta manera, por ejemplo.
                        </p>
                    </div>
                </div>
                <div class="boxes row">
                    <div class="col-md-4 boxMain greenBox5">
                        <img class="resultsBox" src="{{ asset('imgs/resutados-bg.png') }}" alt="">

                    </div>
                    <div class="col-md-4 boxMain greenBox6">
                        <p>Invertir más de la cuenta.
                            La ecuación debe estar balanceada en todas las prioridades financieras y lograr una cohabitación saludable entre las mismas.</p>
        
                    </div>
                    <div class="col-md-4 boxMain greenBox7">

                        <p>Tardar demasiado
                            en planear y
                            no ejecutar.

                        </p>
                    </div>
        
                </div>
            </div><!-- /.container-fluid -->
                
        </div>
        <!-- /.content-wrapper -->        
    </div>
    <!-- /#wrapper -->
    <div class="playBox">
        <audio id="myAudio">
            <source src="{{ asset( 'audio/page_'.$page.'.ogg' ) }}" type="audio/ogg">
            <source src="{{ asset( 'audio/page_'.$page.'.mp3' ) }}" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        <button id="btn_audio" class='btn_audio'> Play </button>
    </div>
    
    <div class="pageBox">
        <p><strong>{{ $page }}</strong></p>
    </div>
</section><!--CLOSE MAIN WRAPPER-->

@stop