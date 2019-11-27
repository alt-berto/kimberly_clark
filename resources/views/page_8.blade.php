
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
                <h1 class="mainTitle">Iniciativas de DSO</h1>    
                <!--<img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">-->
            </nav>
            <div class="container-fluid colorBoxes">
                <div class="boxes row">
                    <div class="col-md-3 boxMain blueBox1">
                        <img src="{{ asset('imgs/search-icon.svg') }}" alt="">
                        <p>Tracking y
                        seguimiento
            
                        </p>
                    </div>
                    <div class="col-md-3 boxMain blueBox2">
                        <img src="{{ asset('imgs/politicas-icon.svg') }}" alt="">
                        <p>Políticas y
                        procedimientos
                        robustos
            
                        </p>
                    </div>
                    <div class="col-md-3 boxMain blueBox3">
                        <img src="{{ asset('imgs/playbook.svg') }}" alt="">
                    </div>
                    <div class="col-md-3 boxMain blueBox1">
                        <img src="{{ asset('imgs/profesional-icon.svg') }}" alt="">
                        <p>Profesionalizando
                        la operación
            
                        </p>
                    </div>        
                </div>
                <div class="boxes row">
                    <div class="col-md-4 boxMain blueBox5">
                        <img src="{{ asset('imgs/vehiculos-financieros-icon.svg') }}" alt="">
                        <p>Vehículos
                            financieros
                        </p>
                    </div>
                    <div class="col-md-4 boxMain blueBox6">
                        <img src="{{ asset('imgs/investigacion-icon.svg') }}" alt="">
                        <p>Investigación y benchmark del mercado
                        </p>
        
                    </div>
                    <div class="col-md-4 boxMain blueBox5">
                        <img src="{{ asset('imgs/trofeo-icon.svg') }}" alt="">
                        <p>Objetivos y campañas de reconocimiento comunes
            
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