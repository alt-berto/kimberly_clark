
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <side-menu-component page-num="{{ $page }}"></side-menu-component>
        <!-- -->
        <div id="content-wrapper" class="redBox">

            <nav class="navbar static-top">

                <h1 class="mainTitle">Procesos de cuentas por pagar</h1>

            </nav>
            <div class="container-fluid">
                <div class="row circleBox">
                    <div class="col-md-7 circleOptions">
                        <img src="{{ asset('imgs/circle-shape.png') }}" alt="" style="width: 100%"/>

                        <div class="circlesEachOption">
                            <a class="ventas buble" href="">

                                <img src="{{ asset('imgs/ventas-icon.svg') }}" alt="">
                            </a>
                            <a class="apply buble" href="">
                                <img src="{{ asset('imgs/aplicacion-de-pagos-icon.svg') }}" alt="">
                            </a>
                            <a class="resolucion buble" href="">
                                <img src="{{ asset('imgs/resolucion-icon.svg') }}" alt="">
                            </a>
                            <a class="recaudo buble" href="">
                                <img src="{{ asset('imgs/recaudacion-icon.svg') }}" alt="">
                                </a>
                            <a class="facturacion buble" href="">
                                <img src="{{ asset('imgs/facturacion-icon.svg') }}" alt="">
                            </a>
                            <a class="orden buble" href="">
                                <img src="{{ asset('imgs/ordenamiento-icon.svg') }}" alt="">
                                </a>
                            <a class="adminCredit buble" href="">
                                <img src="{{ asset('imgs/admin-credit.svg') }}" alt="">
                            </a>

                        </div>
                        <div class="mainInfo">
                            <p>Al dar click en alguna
                                de las secciones (Ventas,
                                Administración del Crédito,
                                Ordenamiento, etc)  debe aparecer
                                el texto explicatvo aquí junto con la
                                flecha correspondiente

                                Cuando se dá click en el siguiente
                                globo, el texto cambia</p>
                        </div>

                    </div>
                    <div class="col-md-5 mainBG">
                        <img src="{{ asset('imgs/cuentas-bg.png') }}" alt="" style="width: 100%">
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