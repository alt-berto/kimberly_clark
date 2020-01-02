
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
                <h1 class="mainTitle">Iniciativas DIO</h1>
            </nav>
            <div class="container-fluid colorBoxes redBoxes">
                <div class="boxes row">
                    <div id="razo" class="col-md-4 boxMain">
                        <img src="{{ asset('imgs/skus.svg') }}" alt="">
                        <p>Racionalización
                            de *SKU (stock
                            keeping unit)
                        </p>
                        <audio id="my_razo">
                            <source src="{{ asset( 'audio/page_'.$page.'_1.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_1.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div id="optimizacion" class="col-md-4 animated pulse boxMain red1">
                        <img src="{{ asset('imgs/icon-automat.svg') }}" alt="">
                        <p>Optimización de
                            la planeación

                        </p>
                        <audio id="my_optimizacion">
                            <source src="{{ asset( 'audio/page_'.$page.'_2.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_2.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>

                    <div id="manejo" class="col-md-4 boxMain red2">
                        <img src="{{ asset('imgs/icon-computers.svg') }}" alt="">
                        <p>Manejo inteligente
                            de inventarios

                        </p>
                        <audio id="my_manejo">
                            <source src="{{ asset( 'audio/page_'.$page.'_3.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_3.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>
                <div class="boxes row">
                    <div id="eficiencia" class="col-md-4 boxMain red3">
                        <img src="{{ asset('imgs/icon-ordenamiento.svg') }}" alt="">
                        <p>Eficiencia en
                            el ordenamiento</p>
                        <audio id="my_eficiencia">
                            <source src="{{ asset( 'audio/page_'.$page.'_4.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_4.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div id="venta" class="col-md-4 boxMain red2">
                        <img src="{{ asset('imgs/icon-ventas.svg') }}" alt="">
                        <p>Venta de desperdicios
                            y obsoletos
                        </p>
                        <audio id="my_venta">
                            <source src="{{ asset( 'audio/page_'.$page.'_5.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_5.mp3' ) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div id="mejorar" class="col-md-4 boxMain">
                        <img src="{{ asset('imgs/icon-transportes.svg') }}" alt="">
                        <p>Mejorar transportes
                        </p>
                        <audio id="my_mejorar">
                            <source src="{{ asset( 'audio/page_'.$page.'_6.ogg' ) }}" type="audio/ogg">
                            <source src="{{ asset( 'audio/page_'.$page.'_6.mp3' ) }}" type="audio/mpeg">
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
        <button id="btn_audio" class='btn_audio'> Play </button>
    </div>
    
    <div class="pageBox">
        <p><strong>{{ $page }}</strong></p>
    </div>
</section><!--CLOSE MAIN WRAPPER-->

@stop