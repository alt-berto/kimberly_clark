
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    El ciclo de caja y sus componentes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Énfasis en la rotación de cartera inventarios y cuentas por pagar
                </a>        
            </li>
            <li class="optionsNav">    
                <ul>
                    <li class="nav-item "> 
                        <a class="nav-link" href="#">
                            <img src="{{ asset('imgs/a-icon.svg') }}" alt="">
                            Componentes generales
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                            <img src="{{ asset('imgs/b-icon.svg') }}" alt="">
                            Iniciativas más comunes
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                            <img src="{{ asset('imgs/c-icon.svg') }}" alt="">
                            Vehículos financieros        
                        </a>
                    </li>
                </ul>    
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Constitución del playbook    
                </a>    
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Constitución del playbook    
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Recomendaciones finales        
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Quices        
                </a>    
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Evaluación final
                </a>    
            </li>    
            <li class="nextBack">
                <a href="" class="back"><img src="{{ asset('imgs/arrow-back.svg') }}" alt="{{ URL::to('/') }}"></a>
                <a href="" class="next"><img src="{{ asset('imgs/arrow-next.svg') }}" alt="{{ URL::to('/page/2') }}"></a>
            </li>
        </ul>
        <!-- -->
        <div id="content-wrapper">
            <nav class="navbar static-top">    
                <h1 class="mainTitle">¿Por qué se presta atención a la liquidez?</h1>    
            </nav>
            <div class="container-fluid">
                <div class="boxes row">
                    <div class="col-md-3 boxMain greenBox1">
                        <img src="{{ asset('imgs/icon-1.svg') }}" alt="">
                        <p>Volatilidad<br/> de los mercados<br/> aumentando la<br/> exposición del riesgo </p>
                    </div>
                    <div class="col-md-3 boxMain greenBox2">
                        <img src="{{ asset('imgs/icon-2.svg') }}" alt="">
                        <p>Gran cantidad de<br/> empresas grandes<br/> fijando bancarrota </p>
                    </div>
                    <div class="col-md-3 boxMain greenBox3">
                        <img src="{{ asset('imgs/icon-3.svg') }}" alt="">
                    </div>
                    <div class="col-md-3 boxMain greenBox4">
                        <img src="{{ asset('imgs/icon-4.svg') }}" alt="">
                        <p>Caída del 9%<br/> de préstamos<br/> comerciales<br/> e industriales </p>
                    </div>        
                </div>
                <div class="boxes row">
                    <div class="col-md-4 boxMain greenBox5">
                        <img src="{{ asset('imgs/icon-5.svg') }}" alt="">
                        <p>Cambios regulatorios</p>
                    </div>
                    <div class="col-md-4 boxMain greenBox6">
                        <img src="{{ asset('imgs/icon-6.svg') }}" alt="">
                        <p>Incertidumbre política y<br/> macroeconómica</p>
        
                    </div>
                    <div class="col-md-4 boxMain greenBox7">
                        <img src="{{ asset('imgs/icon-7.svg') }}" alt="">
                        <p>Incertidumbre generalizada:<br/> precios, tasa de cambio y<br/> tasas de Interés </p>
                    </div>
                </div>
            </div><!-- /.container-fluid -->        
        </div>
        <!-- /.content-wrapper -->        
    </div>
    <!-- /#wrapper -->

    <div class="pageBox">
        <p><strong>1</strong></p>
    </div>
</section><!--CLOSE MAIN WRAPPER-->

@stop