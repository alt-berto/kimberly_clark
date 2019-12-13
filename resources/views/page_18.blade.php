
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
                <h1 class="mainTitle">Iniciativas DIO</h1>
            </nav>
            <div class="container-fluid colorBoxes redBoxes">
                <div class="boxes row">
                    <div class="col-md-4 boxMain">
                        <img src="{{ asset('imgs/skus.svg') }}" alt="">
                        <p>Racionalización
                            de *SKU (stock
                            keeping unit)
                        </p>
                    </div>
                    <div class="col-md-4 animated pulse boxMain red1">
                        <img src="{{ asset('imgs/icon-automat.svg') }}" alt="">
                        <p>Optimización de
                            la planeación

                        </p>
                    </div>

                    <div class="col-md-4 boxMain red2">
                        <img src="{{ asset('imgs/icon-computers.svg') }}" alt="">
                        <p>Manejo inteligente
                            de inventarios

                        </p>
                    </div>
                </div>
                <div class="boxes row">
                    <div class="col-md-4 boxMain red3">
                        <img src="{{ asset('imgs/icon-ordenamiento.svg') }}" alt="">
                        <p>Eficiencia en
                            el ordenamiento</p>
                    </div>
                    <div class="col-md-4 boxMain red2">
                        <img src="{{ asset('imgs/icon-ventas.svg') }}" alt="">
                        <p>Venta de desperdicios
                            y obsoletos
                        </p>
        
                    </div>
                    <div class="col-md-4 boxMain">
                        <img src="{{ asset('imgs/icon-transportes.svg') }}" alt="">
                        <p>Mejorar transportes
                        </p>
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