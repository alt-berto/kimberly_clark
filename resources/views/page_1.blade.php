
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
                <h1 class="mainTitle">¿Por qué se presta atención a la liquidez?</h1>    
            </nav>
            <div class="container-fluid colorBoxes">
                <div class="boxes row">
                    <div class="col-md-3 boxMain greenBox1">
                        <img src="{{ asset('imgs/icon-1.svg') }}" alt="">
                        <p>Volatilidad
                            de los mercados aumentando la exposición del riesgo
                        </p>
                    </div>
                    <div class="col-md-3 animated pulse boxMain greenBox2">
                        <img src="{{ asset('imgs/icon-2.svg') }}" alt="">
                        <p>Gran cantidad de empresas grandes fijando bancarrota
                        </p>
                    </div>
                    <div class="col-md-3 boxMain greenBox3">
                        <img src="{{ asset('imgs/icon-3.svg') }}" alt="">
                    </div>
                    <div class="col-md-3 boxMain greenBox4">
                        <img src="{{ asset('imgs/icon-4.svg') }}" alt="">
                        <p>Caída del 9%
                            de préstamos comerciales
                            e industriales
                        </p>
                    </div>
                </div>
                <div class="boxes row">
                    <div class="col-md-4 boxMain greenBox5">
                        <img src="{{ asset('imgs/icon-5.svg') }}" alt="">
                        <p>Cambios regulatorios</p>
                    </div>
                    <div class="col-md-4 boxMain greenBox6">
                        <img src="{{ asset('imgs/icon-6.svg') }}" alt="">
                        <p>Incertidumbre política y macroeconómica</p>
        
                    </div>
                    <div class="col-md-4 boxMain greenBox7">
                        <img src="{{ asset('imgs/icon-7.svg') }}" alt="">
                        <p>Incertidumbre generalizada: precios, tasa de cambio y tasas de Interés
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