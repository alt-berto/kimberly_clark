
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
                <h1 class="mainTitle">Iniciativas de DSO</h1>    
                <!--<img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">-->
            </nav>
            <div class="container-fluid colorBoxes">
                <div class="boxes row">
                    <div id="track" class="col-md-3 boxMain blueBox1">
                        <img src="{{ asset('imgs/search-icon.svg') }}" alt="">
                        <p>Tracking y
                        seguimiento
            
                        </p>
                        <audio id="my_track">
                            <source src="{{ asset( 'audio/page_'.$page.'_1.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_1.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div id="politica" class="col-md-3 boxMain blueBox2">
                        <img src="{{ asset('imgs/politicas-icon.svg') }}" alt="">
                        <p>Políticas y
                        procedimientos
                        robustos
            
                        </p>
                        <audio id="my_politica">
                            <source src="{{ asset( 'audio/page_'.$page.'_2.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_2.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div id="playbook" class="col-md-3 boxMain blueBox3">
                        <img src="{{ asset('imgs/playbook.svg') }}" alt="">
                        <audio id="my_playbook">
                            <source src="{{ asset( 'audio/page_'.$page.'_3.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_3.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div id="profesionalizando" class="col-md-3 boxMain blueBox1">
                        <img src="{{ asset('imgs/profesional-icon.svg') }}" alt="">
                        <p>Profesionalizando
                        la operación
            
                        </p>
                        <audio id="my_profesionalizando">
                            <source src="{{ asset( 'audio/page_'.$page.'_4.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_4.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>        
                </div>
                <div class="boxes row">
                    <div id="vehiculos" class="col-md-4 boxMain blueBox5">
                        <img src="{{ asset('imgs/vehiculos-financieros-icon.svg') }}" alt="">
                        <p>Vehículos
                            financieros
                        </p>
                        <audio id="my_vehiculos">
                            <source src="{{ asset( 'audio/page_'.$page.'_5.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_5.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div id="investigacion" class="col-md-4 boxMain blueBox6">
                        <img src="{{ asset('imgs/investigacion-icon.svg') }}" alt="">
                        <p>Investigación y benchmark del mercado
                        </p>
                        <audio id="my_investigacion">
                            <source src="{{ asset( 'audio/page_'.$page.'_6.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_6.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
        
                    </div>
                    <div id="objetivos" class="col-md-4 boxMain blueBox5">
                        <img src="{{ asset('imgs/trofeo-icon.svg') }}" alt="">
                        <p>Objetivos y campañas de reconocimiento comunes
            
                        </p>
                        <audio id="my_objetivos">
                            <source src="{{ asset( 'audio/page_'.$page.'_7.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_7.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
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
        <button id="btn_audio" type="button" class="btn_audio btn btn-secondary btn-lg blueButton">Pausa / Play <i class="fas fa-play"></i></button>

    </div>
    
    <div class="pageBox">
        <p><strong>{{ $page }}</strong></p>
    </div>
</section><!--CLOSE MAIN WRAPPER-->

@stop