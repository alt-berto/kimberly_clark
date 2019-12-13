
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <side-menu-component page-num="{{ $page }}"></side-menu-component>
        <!-- -->
        <div id="content-wrapper" class="greenWrapper">

            <nav class="navbar static-top">

                <h1 class="mainTitle">Procesos con las cuentas por pagar</h1>

            </nav>
            <div class="container-fluid">
                <div class="row circleBox">
                    <div class="col-md-7 circleOptions">
                        <img src="{{ asset('imgs/circle-shape.png') }}" alt="" style="width: 100%"/>

                        <div class="circlesEachOption">
                            <a class="ventas buble" href="">

                                <img src="{{ asset('imgs/icon-origen.svg') }}" alt="">
                            </a>
                            <a class="apply buble" href="">
                                <img src="{{ asset('imgs/icon-procesos.svg') }}" alt="">
                            </a>
                            <a class="resolucion buble" href="">
                                <img src="{{ asset('imgs/icon-procesamiento.svg') }}" alt="">
                            </a>
                            <a class="recaudo buble" href="">
                                <img src="{{ asset('imgs/icon-recepcion.svg') }}" alt="">
                                </a>
                            <a class="facturacion buble" href="">
                                <img src="{{ asset('imgs/icon-orden.svg') }}" alt="">
                            </a>
                            <a class="orden buble" href="">
                                <img src="{{ asset('imgs/icon-proveedor-admin.svg') }}" alt="">
                                </a>
                            <a class="adminCredit buble" href="">
                                <img src="{{ asset('imgs/icon-proveedor.svg') }}" alt="">
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
                        <img src="{{ asset('imgs/bg-22-page.png') }}" alt="" style="width: 100%">
                    </div>
                </div>
            </div><!-- /.container-fluid -->



        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <div class="pageBox">
        <p><strong>{{ $page }}</strong></p>
    </div>
</section><!--CLOSE MAIN WRAPPER-->

@stop