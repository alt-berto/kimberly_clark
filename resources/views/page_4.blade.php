
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
                <h1 class="mainTitle">El Ciclo de Caja y sus componentes</h1>
                <h5>Metodologia de cálculo mensual</h5>    
                <img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">
            </nav>
            <div class="container-fluid contentBox page5">
                <div class="content3 row">
                    <div class="topLineColor"></div>                    
                    <div class="col-md-6 ciclo">
                        <img class="animated bounceInLeft guy" src="{{ asset('imgs/ciclo-de-caja-guy.png') }}" alt="">
                    </div>
                    <div class="col-md-6 cicloSteps ciclo">
                        <img class="animated bounceInDown" src="{{ asset('imgs/ciclo-de-caja-paso1.png') }}" alt="">
                        <img class="animated bounceIn" src="{{ asset('imgs/ciclo-de-caja-paso2.png') }}" alt="">
                        <img class="animated bounceInUp" src="{{ asset('imgs/ciclo-de-caja-paso3.png') }}" alt="">
                    </div>
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