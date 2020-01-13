
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
                constitucion="{{ true }}"
                recomendaciones="{{ false }}"
                quices="{{ false }}"
                evaluaciones="{{ false }}"
                page-num="{{ $page }}">
            </side-menu-component>
            <!-- -->
            <div id="content-wrapper" class="purpleBoxMain">
                <nav class="navbar static-top">
                    <h1 class="mainTitle">Playbook de CCC
                    </h1>
                </nav>

                <div class="container-fluid">
                    <div class="row circleBox ">
                        <div class="col-md-7 circleOptions">
                            <img src="{{ asset('imgs/enfoques-fundamentales.png') }}" alt="" style="width: 100%"/>

                            <div class="circlesEachOption circleBoxEnter">

                                <a id="apply" class="apply buble animated pulse" href="#">
                                    <audio id="my_apply">
                                        <source src="{{ asset( 'audio/page_'.$page.'_7.ogg' ) }}" type="audio/ogg">
                                        <source src="{{ asset( 'audio/page_'.$page.'_7.mp3' ) }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <img src="{{ asset('imgs/icon-2k.png') }}" alt="">
                                </a>

                                <a id="recaudo" class="recaudo buble animated pulse" href="#">
                                    <audio id="my_recaudo">
                                        <source src="{{ asset( 'audio/page_'.$page.'_5.ogg' ) }}" type="audio/ogg">
                                        <source src="{{ asset( 'audio/page_'.$page.'_5.mp3' ) }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <img src="{{ asset('imgs/icon-4k.png') }}" alt="">
                                </a>
                                <a id="facturacion" class="facturacion buble animated pulse" href="#">
                                    <audio id="my_facturacion">
                                        <source src="{{ asset( 'audio/page_'.$page.'_4.ogg' ) }}" type="audio/ogg">
                                        <source src="{{ asset( 'audio/page_'.$page.'_4.mp3' ) }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <img src="{{ asset('imgs/icon-3k.png') }}" alt="">
                                </a>

                                <a id="anticipo" class="anticipo2 buble animated pulse" href="#">
                                    <audio id="my_anticipo">
                                        <source src="{{ asset( 'audio/page_'.$page.'_2.ogg' ) }}" type="audio/ogg">
                                        <source src="{{ asset( 'audio/page_'.$page.'_2.mp3' ) }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <img style="width: 100%" src="{{ asset('imgs/icon-1k.png') }}" alt="">
                                </a>

                            </div>


                        </div>
                        <div class="col-md-5">
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