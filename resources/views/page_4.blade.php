
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <side-menu-component 
            ciclo="{{ true }}"
            enfasis="{{ false }}"
            componentes="{{ false }}"
            iniciativas="{{ false }}"
            vehiculos="{{ false }}"
            constitucion="{{ false }}"
            recomendaciones="{{ false }}"
            quices="{{ false }}"
            evaluaciones="{{ false }}"
            page-num="{{ $page }}">
        </side-menu-component>
        <!-- -->
        <div id="content-wrapper">
            <nav class="navbar static-top">    
                <h1 class="mainTitle">El Ciclo de Caja y sus componentes</h1>
                <h5>Metodología de cálculo mensual</h5>    
                <img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">
            </nav>
            <div class="container-fluid contentBox page5">
                <div class="content3 row">
                    <div class="topLineColor"></div>                    
                    <div class="col-md-6 ciclo">
                        <img class="animated fadeInLeft guy" src="{{ asset('imgs/ciclo-de-caja-guy.png') }}" alt="">
                    </div>
                    <div class="col-md-6 cicloSteps ciclo">
                        <img class="animated pulse" src="{{ asset('imgs/ciclo-de-caja-paso1.png') }}" alt="">
                        <img class="animated pulse" src="{{ asset('imgs/ciclo-de-caja-paso2.png') }}" alt="">
                        <img class="animated pulse" src="{{ asset('imgs/ciclo-de-caja-paso3.png') }}" alt="">
                    </div>
                </div><!-- /.container-fluid -->
            </div><!-- /.container-fluid -->        
        </div>
        <!-- /.content-wrapper -->        
    </div>
    <!-- /#wrapper -->
    <div class="playBox">
        <audio id="myAudio">
            <source src="{{ asset( 'audio/page_'.$page.'.ogg' ) }}" type="audio/ogg">
            <source src="{{ asset( 'audio/page_'.$page.'.mp3' ) }}" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        <button id="btn_audio" type="button" class="btn_audio btn btn-secondary btn-lg blueButton">Pausa / Play <i class="fas fa-play"></i></button>

    </div>
    
    <div class="pageBox">
        <p><strong>{{ $page }}</strong></p>
    </div>
</section><!--CLOSE MAIN WRAPPER-->

@stop