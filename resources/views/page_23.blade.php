
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
       <!-- Sidebar -->
       <side-menu-component page-num="{{ $page }}"></side-menu-component>
       <!-- -->
        <div id="content-wrapper">
            <nav class="navbar static-top">    
                <h1 class="mainTitle">Iniciativas de DSO</h1>    
                <!--<img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">-->
            </nav>
            <div class="container-fluid colorBoxes">
                <div class="boxes row">
                    <div class="col-md-6 boxMain blueBox1">
                        <a href=""><img src="{{ asset('imgs/compras-admin-icon-24.svg') }}" alt=""></a>
                        <p>Compras y
                            administración de
                            proveedores
                        </p>
                    </div>
                    <div class="col-md-6 boxMain blueBox2">
                        <a href=""><img src="{{ asset('imgs/factura-process-icon-24.svg') }}" alt=""></a>
                        <p>Procesamiento
                            de facturas
                        </p>
                    </div>

                </div>
                <div class="boxes row">
                    <div class="col-md-6 boxMain blueBox1">
                        <a href=""> <img src="{{ asset('imgs/icon-process-24.svg') }}" alt=""></a>

                        <p>Procesamiento
                            de pagos

                        </p>
                    </div>
                    <div class="col-md-6 boxMain blueBox2">
                        <a href="">  <img src="{{ asset('imgs/icon-reports-24.svg') }}" alt=""></a>

                        <p>Reportes y
                            visibilidad

                        </p>
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