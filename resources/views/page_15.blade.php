
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <side-menu-component page-num="{{ $page }}"></side-menu-component>
        <!-- -->
        <div id="content-wrapper" class="purpleBox">
            <nav class="navbar static-top">    
                <h1 class="mainTitle">Procesos con los Inventarios</h1>    
                <!--<img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">-->
            </nav>
            <div class="container-fluid">
                <div class="row circleBox">
                    <div class="col-md-7 circleOptions">
                        <img src="{{ asset('imgs/circle-shape.png') }}" style="width: 100%"/>
                        <div class="circlesEachOption">
                            <a class="ventas buble" href=""><img src="{{ asset('imgs/admin-products.svg') }}" alt=""></a>
                            <a class="apply buble" href=""><img src="{{ asset('imgs/distribucion-icon.svg') }}" alt=""></a>
                            <a class="resolucion buble" href=""><img src="{{ asset('imgs/almacenaje-icon.svg') }}" alt=""></a>
                            <a class="recaudo buble" href=""><img src="{{ asset('imgs/manufactura-icon.svg') }}" alt=""></a>
                            <a class="facturacion buble" href=""><img src="{{ asset('imgs/plan-icon.svg') }}" alt=""></a>
                            <a class="orden buble" href=""><img src="{{ asset('imgs/proceso-icon.svg') }}" alt=""></a>
                            <a class="adminCredit buble" href=""><img src="{{ asset('imgs/proyecciones.svg') }}" alt=""></a>                
                        </div>
                        <div class="mainInfo">
                            <p>Al dar click en alguna
                                de las secciones (Ventas,
                                Administración del Crédito,
                                Ordenamiento, etc)  debe aparecer
                                el texto explicatvo aquí junto con la
                                flecha correspondiente
                
                                Cuando se dá click en el siguiente
                                globo, el texto cambia
                            </p>
                        </div>
            
                    </div>
                    <div class="col-md-5"></div>
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