
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

                <h1 class="mainTitle">Componentes de las cuentas por pagar</h1>

            </nav>
            <div class="container-fluid">
                <div class="row circleBox blueCuentas">
                    <div class="col-md-7 circleOptions">
                        <img src="{{ asset('imgs/circle-shape.png') }}" alt="" style="width: 100%; visibility: hidden"/>

                        <div class="circlesEachOption">
                            <a class="ventas buble" href="">

                                <img src="{{ asset('imgs/icon-proveedores-23.svg') }}" alt="">
                            </a>
                            <a class="apply buble" href="">
                                <img src="{{ asset('imgs/icon-dividendos-23.svg') }}" alt="">
                            </a>
                            <a class="resolucion buble" href="">
                                <img src="{{ asset('imgs/icon-balance-23.svg') }}" alt="">
                            </a>
                            <a class="recaudo buble" href="">
                                <img src="{{ asset('imgs/icon-otrasCuentas-23.svg') }}" alt="">
                            </a>
                            <a class="facturacion buble" href="">
                                <img src="{{ asset('imgs/cuentas-por-pagar.svg') }}" alt="">
                            </a>
                            <a class="orden buble" href="">
                                <img src="{{ asset('imgs/icon-tax-23.svg') }}" alt="">
                            </a>
                            <a class="anticipo buble" href="">
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
        <button id="btn_audio" class='btn_audio'> Play </button>
    </div>
    
    <div class="pageBox">
        <p><strong>{{ $page }}</strong></p>
    </div>
</section><!--CLOSE MAIN WRAPPER-->

@stop