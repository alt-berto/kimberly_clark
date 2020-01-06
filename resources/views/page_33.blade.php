
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <side-menu-component page-num="{{ $page }}"></side-menu-component>
        <!-- -->
        <div id="content-wrapper" class="greenBoxMain">
            <nav class="navbar static-top">    
                <h1 class="mainTitle">¿Qué hemos aprendido?</h1>
                <img class="iconLogo" src="{{ asset('imgs/icon-vehiculos.svg') }}" alt="">
            </nav>
            <div class="container-fluid">
                <div class="row">
                   <div class="col-md-12 centerBoxImg">
                       <img src="{{ asset('imgs/cash-conversion.jpg') }}" alt="">
                   </div>
                    <div class="boxesBlue row">
                        <div class="col-md-3">
                            <p>Entender la importancia de mantener liquidez en la compañía y el impacto en el negocio.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p>
                                Conocimiento de los components del CCC y la metodología corporativa.

                            </p>
                        </div>
                        <div class="col-md-3">
                            <p>¿Cuál es el impacto desde todas las posiciones y cómo generar valor en cuanto a CCC?
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p>¿Cómo se trabaja el CCC dentro de K-C, quiénes son los líderes y los equipos?</p>
                        </div>
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
        <button id="btn_audio" class='btn_audio'> Play </button>
    </div>
    
    <div class="pageBox">
        <p><strong>{{ $page }}</strong></p>
    </div>
</section><!--CLOSE MAIN WRAPPER-->

@stop