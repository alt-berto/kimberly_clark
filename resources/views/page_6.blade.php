
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <side-menu-component page-num="{{ $page }}"></side-menu-component>
        <!-- -->
        <div id="content-wrapper" class="boxBlue">

            <nav class="navbar static-top">

                <h1 class="mainTitle">Procesos de cuentas por pagar</h1>

            </nav>
            <div class="container-fluid">
                <div class="row circleBox">
                    <div class="col-md-7 circleOptions">
                        <img src="{{ asset('imgs/circle-shape.png') }}" alt="" style="width: 100%; visibility: hidden"/>

                        <div class="circlesEachOption">
                            <a id="ventas" class="ventas buble" href="#">
                                <audio id="my_ventas">
                                    <source src="{{ asset( 'audio/page_'.$page.'_1.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_1.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/cartera-icon.svg') }}" alt="">
                            </a>
                            <a id="apply" class="apply buble" href="#">
                                <audio id="my_apply">
                                    <source src="{{ asset( 'audio/page_'.$page.'_7.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_7.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/dividendos-icon.svg') }}" alt="">
                            </a>
                            <a id="resolucion" class="resolucion buble" href="#">
                                <audio id="my_resolucion">
                                    <source src="{{ asset( 'audio/page_'.$page.'_6.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_6.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/intercompany-cartera-icon.svg') }}" alt="">
                            </a>
                            <a id="recaudo" class="recaudo buble" href="#">
                                <audio id="my_recaudo">
                                    <source src="{{ asset( 'audio/page_'.$page.'_5.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_5.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/proviciones-icon.svg') }}" alt="">
                            </a>
                            <a id="facturacion" class="facturacion buble" href="#">
                                <audio id="my_facturacion">
                                    <source src="{{ asset( 'audio/page_'.$page.'_4.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_4.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/cartera-empleados-icon.svg') }}" alt="">
                            </a>
                            <a id="orden" class="orden buble" href="#">
                                <audio id="my_orden">
                                    <source src="{{ asset( 'audio/page_'.$page.'_3.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_3.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/impuestos-icon.svg') }}" alt="">
                            </a>
                            <a id="anticipo" class="anticipo buble" href="#">
                                <audio id="my_anticipo">
                                    <source src="{{ asset( 'audio/page_'.$page.'_2.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_2.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/anticipos-icon.svg') }}" alt="">
                            </a>

                        </div>
                        <div class="mainCuentas">
                            <img src="{{ asset('imgs/icon-cuentas-cobrar.svg') }}" alt="">
                        </div>

                    </div>
                    <div class="col-md-5 mainBG">
                        <img src="{{ asset('imgs/BG-PAGE-7.png') }}" alt="" style="width: 100%;">
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