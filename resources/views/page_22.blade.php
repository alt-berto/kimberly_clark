
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
            componentes="{{ true }}"
            iniciativas="{{ false }}"
            vehiculos="{{ false }}"
            constitucion="{{ false }}"
            recomendaciones="{{ false }}"
            quices="{{ false }}"
            evaluaciones="{{ false }}"
            page-num="{{ $page }}">
        </side-menu-component>
        <!-- -->
        <div id="content-wrapper" class="boxBlue">

            <nav class="navbar static-top">

                <h1 class="mainTitle">Componentes de las cuentas por pagar</h1>

            </nav>
            <div class="container-fluid">
                <div class="row circleBox blueCuentas">
                    <div class="col-md-7 circleOptions">
                        <img src="{{ asset('imgs/circle-shape.png') }}" alt="" style="width: 100%; visibility: hidden"/>

                        <div class="circlesEachOption">
                            <a id="ventas" class="ventas buble animated pulse" href="#">
                                <audio id="my_ventas">
                                    <source src="{{ asset( 'audio/page_'.$page.'_1.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_1.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/icon-proveedores-23.svg') }}" alt="">
                            </a>
                            <a id="apply" class="apply buble animated pulse" href="#">
                                <audio id="my_apply">
                                    <source src="{{ asset( 'audio/page_'.$page.'_7.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_7.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/icon-dividendos-23.svg') }}" alt="">
                            </a>
                            <a id="resolucion" class="resolucion buble animated pulse" href="#">
                                <audio id="my_resolucion">
                                    <source src="{{ asset( 'audio/page_'.$page.'_6.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_6.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/icon-balance-23.svg') }}" alt="">
                            </a>
                            <a id="recaudo" class="recaudo buble animated pulse" href="#">
                                <audio id="my_recaudo">
                                    <source src="{{ asset( 'audio/page_'.$page.'_5.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_5.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/icon-otrasCuentas-23.svg') }}" alt="">
                            </a>
                            <a id="facturacion" class="facturacion buble animated pulse" href="#">
                                <audio id="my_facturacion">
                                    <source src="{{ asset( 'audio/page_'.$page.'_4.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_4.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/cuentas-por-pagar.svg') }}" alt="">
                            </a>
                            <a id="orden" class="orden buble animated pulse" href="#">
                                <audio id="my_orden">
                                    <source src="{{ asset( 'audio/page_'.$page.'_3.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_3.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/icon-tax-23.svg') }}" alt="">
                            </a>
                            <a id="anticipo" class="anticipo buble animated pulse" href="#">
                                <audio id="my_anticipo">
                                    <source src="{{ asset( 'audio/page_'.$page.'_2.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_2.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/icon-gastos-23.svg') }}" alt="">
                            </a>

                        </div>
                        <div class="mainCuentas">
                            <img src="{{ asset('imgs/icon-cuentas-cobrar.svg') }}" alt="">
                        </div>

                    </div>
                    <div class="col-md-5 mainBG">
                        <img src="{{ asset('imgs/bg-23-main.png') }}" alt="" style="width: 100%">
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