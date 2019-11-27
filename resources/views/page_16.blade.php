
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
                <!--<h1 class="mainTitle">¿Por qué se presta atención a la liquidez?</h1>    
                <img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">-->
            </nav>
            <div class="container-fluid contentBox blueContainer">
                <div class="content3">
                    <div class="topLineColor">
                            <h1>Flowchart</h1>
                            <h2>de la cadena
                                de suministros</h2>
                    </div>
                    <div class="flowChart">
                        <ul>
                            <li class="animated fadeInLeft">
                                <img src="{{ asset('imgs/proveedores-icon.svg') }}" alt="">
                                <h6>Proveedores</h6>
                            </li>
                            <li class="animated fadeInDown">
                                <img src="{{ asset('imgs/manufactura1-icon.svg') }}" alt="">
                                <h6>Manufactura </h6>
                            </li>
                            <li class="animated flip">
                                <img src="{{ asset('imgs/car-distribucion-icon.svg') }}" alt="">
                                <h6>Distribución </h6>
                            </li>
                            <li class="animated fadeInUp">
                                <img src="{{ asset('imgs/comercio-icon.svg') }}" alt="">
                                <h6>Comercialización</h6>
                            </li>
                            <li class="animated fadeInRight">
                                <img src="{{ asset('imgs/consumer-icon.svg') }}" alt="">
                                <h6>Consumidor</h6>
                            </li>
                        </ul>
                        
                        <div class="whiteBox">
                            <ul>
                                <li>
                                    <h5>Productos y servicios
                                    </h5>
                                </li>
                                <li>
                                    <h5>Efectivo</h5>
                                </li>
                                <li>
                                    <h5>Información</h5>
                                </li>
                            </ul>
                        </div>                        
                    </div><!--close flow chart-->
                         
                    
                </div><!-- /.container-fluid -->
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