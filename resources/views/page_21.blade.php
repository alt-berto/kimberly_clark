
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <side-menu-component page-num="{{ $page }}"></side-menu-component>
        <!-- -->
        <div id="content-wrapper" class="greenWrapper">

            <nav class="navbar static-top">

                <h1 class="mainTitle">Procesos con las cuentas por pagar</h1>

            </nav>
            <div class="container-fluid">
                <div class="row circleBox">
                    <div class="col-md-7 circleOptions">
                        <img src="{{ asset('imgs/circle-shape.png') }}" alt="" style="width: 100%"/>

                        <div class="circlesEachOption">
                            <a id="ventas" class="ventas buble" href="#">                                
                                <audio id="my_ventas">
                                    <source src="{{ asset( 'audio/page_'.$page.'_1.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_1.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/icon-origen.svg') }}" alt="">
                            </a>
                            <a id="apply" class="apply buble" href="#">                                
                                <audio id="my_apply">
                                    <source src="{{ asset( 'audio/page_'.$page.'_7.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_7.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/icon-procesos.svg') }}" alt="">
                            </a>
                            <a id="resolucion" class="resolucion buble" href="#">                                
                                <audio id="my_resolucion">
                                    <source src="{{ asset( 'audio/page_'.$page.'_6.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_6.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/icon-procesamiento.svg') }}" alt="">
                            </a>
                            <a id="recaudo" class="recaudo buble" href="#">                                
                                <audio id="my_recaudo">
                                    <source src="{{ asset( 'audio/page_'.$page.'_5.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_5.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/icon-recepcion.svg') }}" alt="">
                                </a>
                                <a id="facturacion" class="facturacion buble" href="#">                                
                                    <audio id="my_facturacion">
                                        <source src="{{ asset( 'audio/page_'.$page.'_4.ogg' ) }}" type="audio/ogg">
                                        <source src="{{ asset( 'audio/page_'.$page.'_4.mp3' ) }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                <img src="{{ asset('imgs/icon-orden.svg') }}" alt="">
                            </a>
                            <a id="orden" class="orden buble" href="#">                                
                                <audio id="my_orden">
                                    <source src="{{ asset( 'audio/page_'.$page.'_3.ogg' ) }}" type="audio/ogg">
                                    <source src="{{ asset( 'audio/page_'.$page.'_3.mp3' ) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <img src="{{ asset('imgs/icon-proveedor-admin.svg') }}" alt="">
                                </a>
                                <a id="anticipo" class="adminCredit buble" href="#">                                
                                    <audio id="my_anticipo">
                                        <source src="{{ asset( 'audio/page_'.$page.'_2.ogg' ) }}" type="audio/ogg">
                                        <source src="{{ asset( 'audio/page_'.$page.'_2.mp3' ) }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                <img src="{{ asset('imgs/icon-proveedor.svg') }}" alt="">
                            </a>

                        </div>
                        <div class="mainInfo">
                            <p>Al dar click en alguna
                                de las secciones (Ventas,
                                Administración del Crédito,
                                Ordenamiento, etc)  debe aparecer
                                el texto explicatvo aquí junto con la
                                flecha correspondiente

                                Cuando se dá click en el siguiente
                                globo, el texto cambia</p>
                        </div>

                    </div>
                    <div class="col-md-5 mainBG">
                        <img src="{{ asset('imgs/bg-22-page.png') }}" alt="" style="width: 100%">
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