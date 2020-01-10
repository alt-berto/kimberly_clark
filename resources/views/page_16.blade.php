
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
                    <h1 class="mainTitle">Los tipos de Inventarios</h1>
                    <img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">
                </nav>
                <div class="container-fluid contentBox page5">
                    <div class="content3 boxBlueLight row">
                        <div class="topLineColor"></div>
                       <div class="col-md-3" id="materia" style="cursor:pointer;">
                            <h5>Materia Prima</h5>
                            <a href="#"><img class="primaBox  animated tada" src="{{ asset('imgs/materia-prima.png') }}" alt=""></a>
                            <audio id="my_materia">
                                <source src="{{ asset( 'audio/page_'.$page.'_1.ogg' ) }}" type="audio/ogg">
                                <source src="{{ asset( 'audio/page_'.$page.'_1.mp3' ) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                       </div>
                        <div class="col-md-3" id="proceso" style="cursor:pointer;">
                            <h5>Productos
                                en proceso</h5>
                            <a href="#"><img class="primaBox  animated tada" src="{{ asset('imgs/productos-en-proceso.png') }}" alt=""></a>
                            <audio id="my_proceso">
                                <source src="{{ asset( 'audio/page_'.$page.'_2.ogg' ) }}" type="audio/ogg">
                                <source src="{{ asset( 'audio/page_'.$page.'_2.mp3' ) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="col-md-3" id="terminado" style="cursor:pointer;">
                            <h5>Producto
                                terminado
                            </h5>
                            <a href="#"> <img class="primaBox  animated tada" src="{{ asset('imgs/productos-terminado.png') }}" alt=""></a>
                            <audio id="my_terminado">
                                <source src="{{ asset( 'audio/page_'.$page.'_3.ogg' ) }}" type="audio/ogg">
                                <source src="{{ asset( 'audio/page_'.$page.'_3.mp3' ) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="col-md-3" id="desperdicio" style="cursor:pointer;">
                            <h5>Desperdicios</h5>
                            <a href="#"><img class="primaBox  animated tada" src="{{ asset('imgs/desperdicios.png') }}" alt=""></a>
                            <audio id="my_desperdicio">
                                <source src="{{ asset( 'audio/page_'.$page.'_4.ogg' ) }}" type="audio/ogg">
                                <source src="{{ asset( 'audio/page_'.$page.'_4.mp3' ) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </div><!-- /.boxBlueLight -->
                    <div class="lastContent row">
                        <div class="col-md-3">
                            <h5>Bobina de papel</h5>
                        </div>
                        <div class="col-md-3">
                            <h5>Papel higiénico
                                en proceso</h5>
                        </div>
                        <div class="col-md-3">
                            <h5>Papel higiénico
                                disponible para
                                la venta
                            </h5>
                        </div>
                        <div class="col-md-3">
                            <h5>Fibra de papel
                            </h5>
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