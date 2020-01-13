
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
       <!-- Sidebar -->
       <side-menu-component 
            ciclo="{{ false }}"
            enfasis="{{ false }}"
            componentes="{{ false }}"
            iniciativas="{{ true }}"
            vehiculos="{{ false }}"
            constitucion="{{ false }}"
            recomendaciones="{{ false }}"
            quices="{{ false }}"
            evaluaciones="{{ false }}"
            page-num="{{ $page }}">
        </side-menu-component>
       <!-- -->
        <div id="content-wrapper">
            <nav class="navbar static-top">    
                <h1 class="mainTitle">Iniciativas de DSO</h1>    
                <!--<img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">-->
            </nav>
            <div class="container-fluid colorBoxes">
                <div class="boxes row">
                    <div class="col-md-6 boxMain animated pulse blueBox1" id="compras">
                        <a href="#"><img src="{{ asset('imgs/compras-admin-icon-24.svg') }}" alt=""></a>
                        <p>Compras y
                            administración de
                            proveedores
                        </p>
                        <audio id="my_compras">
                            <source src="{{ asset( 'audio/page_'.$page.'_1.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_1.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="col-md-6 boxMain blueBox2 animated pulse" id="facturas">
                        <a href="#"><img src="{{ asset('imgs/factura-process-icon-24.svg') }}" alt=""></a>
                        <p>Procesamiento
                            de facturas
                        </p>
                        <audio id="my_facturas">
                            <source src="{{ asset( 'audio/page_'.$page.'_2.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_2.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>

                </div>
                <div class="boxes row">
                    <div class="col-md-6 boxMain animated pulse blueBox1" id="pagos">
                        <a href="#"> <img src="{{ asset('imgs/icon-process-24.svg') }}" alt=""></a>

                        <p>Procesamiento
                            de pagos

                        </p>
                        <audio id="my_pagos">
                            <source src="{{ asset( 'audio/page_'.$page.'_3.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_3.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="col-md-6 boxMain animated pulse blueBox2" id="reportes">
                        <a href="#">  <img src="{{ asset('imgs/icon-reports-24.svg') }}" alt=""></a>

                        <p>Reportes y
                            visibilidad

                        </p>
                        <audio id="my_reportes">
                            <source src="{{ asset( 'audio/page_'.$page.'_4.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_4.mp3' ) }}" type="audio/mpeg">
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