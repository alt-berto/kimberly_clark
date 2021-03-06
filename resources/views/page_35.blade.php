
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
            vehiculos="{{ false }}"
            constitucion="{{ false }}"
            recomendaciones="{{ false }}"
            quices="{{ false }}"
            evaluaciones="{{ true }}"
            page-num="{{ $page }}">
        </side-menu-component>
        <!-- -->
        <div id="content-wrapper">
            <nav class="navbar static-top">    
                <h1 class="mainTitle">Evaluación final</h1>    
                <!--<img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">-->
            </nav>
            <div class="container-fluid contentBox quizBox">
                <div class="content3">
                    <div class="topLineColor"></div>
                    <div class="quizInfo">
                        <div class="animated fadeInUp">
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Escriba su Email">                              
                            </div>
                            <div class="form-group">
                              <label for="name">Nombre</label>
                              <input type="text" class="form-control" id="name" placeholder="Escriba su Nombre Completo">
                            </div>                                                       
                        </div>
                        <br><br>
                        <div class="boxWhite">
                        <!-- Button trigger modal -->
                        <button id="desplegar" type="button" class="btn btn-primary">
                            Realizar la Evaluacion Final
                        </button>
                        
 

                        </div>
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