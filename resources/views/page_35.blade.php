
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
                        <p class="animated fadeInDown">1. ¿Cuáles son los componentes del primary working capital o CCC?
                        </p>                        
                            <ul class="animated fadeInUp">
                                <li>
                                    <input type="checkbox" class="selected" name="verdadero" value="verdadero" id="id_true">
                                    <label for="id_true">Net sales</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="selected" name="verdadero" value="verdadero" id="id_true2">
                                    <label for="id_true2">DSO</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="selected" name="verdadero" value="verdadero" id="id_true3">
                                    <label for="id_true3">Cost of goods sold</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="selected" name="verdadero" value="verdadero" id="id_true4">
                                    <label for="id_true4">DPO</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="selected" name="verdadero" value="verdadero" id="id_true5">
                                    <label for="id_true5">DIO</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="selected" name="verdadero" value="verdadero" id="id_true6">
                                    <label for="id_true6">Cashflow</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="selected" name="verdadero" value="verdadero" id="id_true7">
                                    <label for="id_true7">Operational profit</label>
                                </li>
                            </ul>
                            <div class="boxWhite">
                            <!-- Button trigger modal -->
                            <button id="desplegar" type="button" class="btn btn-primary" data-toggle="modal" data-target="#falseModal">
                                Desplegar respuesta correcta
                            </button>
                        
                            <!-- Modal -->
                            <div class="modal fade" id="trueModal" tabindex="-1" role="dialog" aria-labelledby="trueModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                            
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                            
                                        <div class="modal-body">
                                            ¡Muy bien! DSO, DPO y DIO
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="falseModal" tabindex="-1" role="dialog" aria-labelledby="falseModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                            
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                            
                                        <div class="modal-body">
                                            Respuesta incorrecta ¡Intentalo nuevamente!
                                        </div>
                                    </div>
                                </div>
                            </div>

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