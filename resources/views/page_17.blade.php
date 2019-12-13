
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
                       <div class="col-md-3">
                            <h5>Materia Prima</h5>
                           <a href=""><img class="primaBox  animated tada" src="{{ asset('imgs/materia-prima.png') }}" alt=""></a>

                       </div>
                        <div class="col-md-3">
                            <h5>Productos
                                en proceso</h5>
                            <a href=""><img class="primaBox  animated tada" src="{{ asset('imgs/productos-en-proceso.png') }}" alt=""></a>

                        </div>
                        <div class="col-md-3">
                            <h5>Producto
                                terminado
                            </h5>
                            <a href=""> <img class="primaBox  animated tada" src="{{ asset('imgs/productos-terminado.png') }}" alt=""></a>

                        </div>
                        <div class="col-md-3">

                            <h5>Desperdicios</h5>
                            <a href=""><img class="primaBox  animated tada" src="{{ asset('imgs/desperdicios.png') }}" alt=""></a>
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

        <div class="pageBox">
            <p><strong>{{ $page }}</strong></p>
        </div>
    </section><!--CLOSE MAIN WRAPPER-->

@stop