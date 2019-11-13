
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
                <a href="" class="back"><img src="{{ asset('imgs/arrow-back.svg') }}" alt="{{ URL::to('/page/1') }}"></a>
                <a href="" class="next"><img src="{{ asset('imgs/arrow-next.svg') }}" alt="{{ URL::to('/page/3') }}"></a>
            </li>
        </ul>
        <!-- -->
        <div id="content-wrapper">
            <nav class="navbar static-top">    
                <h1 class="mainTitle">¿Por qué se presta atención a la liquidez?</h1>    
                <img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">
            </nav>
            <div class="container-fluid contentBox">
                <div class="content3">
                    <div class="topLineColor"></div>
                    <img class="mainImg" src="{{ asset('imgs/page3-bg.png') }}" alt="">
                </div><!-- /.container-fluid -->
            </div><!-- /.container-fluid -->        
        </div>
        <!-- /.content-wrapper -->        
    </div>
    <!-- /#wrapper -->

    <div class="pageBox">
        <p><strong>2</strong></p>
    </div>
</section><!--CLOSE MAIN WRAPPER-->

@stop