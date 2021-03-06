
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
            <div id="content-wrapper" class="purpleBoxMain purpleMain2">
                <nav class="navbar static-top">
                    <h1 class="mainTitle">¿Cómo desde tu rol de influencias el CCC?</h1>
                </nav>
                <div class="container-fluid row">
                    <div class="col-md-8 row">
                   <div class="col-md-6 animated bounceInUp">
                       <div class="col-md-6" style="cursor:pointer;" id="uno">
                           <img src="{{ asset('imgs/icon-otc.svg') }}" alt="">
                           <h6>OTC</h6>
                           <audio id="my_uno">
                                <source src="{{ asset( 'audio/page_'.$page.'_1.ogg' ) }}" type="audio/ogg">
                                <source src="{{ asset( 'audio/page_'.$page.'_1.mp3' ) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                       </div>
                       <div class="col-md-6" style="cursor:pointer;" id="dos">
                           <img src="{{ asset('imgs/icon-ptp.svg') }}" alt="">
                           <h6>PTP</h6>
                           <audio id="my_dos">
                                <source src="{{ asset( 'audio/page_'.$page.'_3.ogg' ) }}" type="audio/ogg">
                                <source src="{{ asset( 'audio/page_'.$page.'_3.mp3' ) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                       </div>
                   </div>
                    <div class="col-md-6 animated bounceInDown">
                        <div class="col-md-6" style="cursor:pointer;" id="tres">
                            <img src="{{ asset('imgs/icon-atr.svg') }}" alt="">
                            <h6>ATR</h6>
                            <audio id="my_tres">
                                <source src="{{ asset( 'audio/page_'.$page.'_2.ogg' ) }}" type="audio/ogg">
                                <source src="{{ asset( 'audio/page_'.$page.'_2.mp3' ) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="col-md-6" style="cursor:pointer;" id="cuatro">
                            <img src="{{ asset('imgs/icon-treasury.svg') }}" alt="">
                            <h6>TREASURY</h6>
                            <audio id="my_cuatro">
                                <source src="{{ asset( 'audio/page_'.$page.'_4.ogg' ) }}" type="audio/ogg">
                                <source src="{{ asset( 'audio/page_'.$page.'_4.mp3' ) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-4">

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