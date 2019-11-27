
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
                <h1 class="mainTitle">Descuento pronto pago</h1>    
                <img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">
            </nav>
            <div class="container-fluid contentBox">
                <div class="content3 contentPagoAntes row">
                    <div class="topLineColor"></div>
                    <div class="col-md-8">
                        <br>
                        <img class="animated bounceInLeft guy" src="{{ asset('imgs/pronto-pago-paso1.png') }}" alt="">
                    </div>
                    <div class="col-md-4 cicloSteps ciclo">
                
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