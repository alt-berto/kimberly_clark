
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <side-menu-component 
            ciclo="{{ false }}"
            enfasis="{{ false }}"
            componentes="{{ false }}"
            iniciativas="{{ false }}"
            vehiculos="{{ true }}"
            constitucion="{{ false }}"
            recomendaciones="{{ false }}"
            quices="{{ false }}"
            evaluaciones="{{ false }}"
            page-num="{{ $page }}">
        </side-menu-component>
        <!-- -->
        <div id="content-wrapper" class="greenBoxMain">
            <nav class="navbar static-top">    
                <h1 class="mainTitle">Vehículos Financiero</h1>    
                <img class="iconLogo" src="{{ asset('imgs/icon-vehiculos.svg') }}" alt="">
            </nav>
            <div class="container-fluid">
                <div class="circleBox row">
                    <div class="col-md-7 circleOptions">
                        <div class="circlesEachOption animated bounce">
                            <a class="animated bounce buble circleBlue1 mainCircleBlue" href=""><img src="{{ asset('imgs/dia0-icon.svg') }}" alt=""></a>
                            <a class="buble circleBlue2" href=""><img src="{{ asset('imgs/dia-46-icon.svg') }}" alt=""></a>
                            <a class="buble circleBlue3" href=""><img src="{{ asset('imgs/dia-16-icon.svg') }}" alt=""></a>
                            <a class="buble circleBlue4" href=""><img src="{{ asset('imgs/dia-15-icon.svg') }}" alt=""></a>
                            <a class="buble circleBlue5" href=""><img src="{{ asset('imgs/dia8-10-icon.svg') }}" alt=""></a>
                            <a class="buble circleBlue6" href=""><img src="{{ asset('imgs/dia8-icon.svg') }}" alt=""></a>
            
                            <div class="mainBlue">
                                <img class="circlesBlueImg" src="{{ asset('imgs/pogramacionMain.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mainBG">
                        <img src="{{ asset('imgs/page9-bg.png') }}"/>
                    </div>
                </div>
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