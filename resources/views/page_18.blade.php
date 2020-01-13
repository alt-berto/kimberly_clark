
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
            quices="{{ true }}"
            evaluaciones="{{ false }}"
            page-num="{{ $page }}">
        </side-menu-component>
        <!-- -->
        <div id="content-wrapper">
            <nav class="navbar static-top">    
                <h1 class="mainTitle">Quiz DSO</h1>    
                <!--<img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">-->
            </nav>
            <div class="container-fluid contentBox quizBox">
                <div class="content3">
                    <div class="topLineColor"></div>
                    <div class="quizInfo">
                        <p class="animated fadeInDown">1. Seleccione cuáles son los tipos de inventario que temenos en KC: </p>
                        
                        <ul class="animated fadeInUp">
                            <li>
                                <input type="checkbox" class="selected" name="verdadero" value="1" id="id_true">
                                <label for="id_true">Inventario de producto terminado</label>
                            </li>
                            <li>
                                <input type="checkbox" class="selected" name="verdadero" value="1" id="id_true2">
                                <label for="id_true2">Inventario de productos en proceso

                                </label>
                            </li>
                            <li>
                                <input type="checkbox" class="selected" name="verdadero" value="1" id="id_true3">
                                <label for="id_true3">Inventario de repuestos
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" class="selected" name="verdadero" value="1" id="id_true4">
                                <label for="id_true4">Inventario materia prima

                                </label>
                            </li>
                            <li>
                                <input type="checkbox" class="selected" name="verdadero" value="1" id="id_true5">
                                <label for="id_true5">Inventario residuos
                                </label>
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
                                            ¡Excelente! Todos estos inventarios componen el DIO </div>
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