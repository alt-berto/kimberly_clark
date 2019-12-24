
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

    <section>
        <div id="wrapper">
            <!-- Sidebar -->
            <side-menu-component page-num="{{ $page }}"></side-menu-component>
            <!-- -->
            <div id="content-wrapper" class="redBoxMain">
                <nav class="navbar static-top">
                    <h1 class="mainTitle">Vehículos Financieros:
                        Supply chain financing
                    </h1>
                    <img class="iconLogo" src="{{ asset('imgs/icon-vehiculos.svg') }}" alt="">
                </nav>
                <div class="container-fluid">
                   <div class="factoring animated bounceInUp">
                       <img src="{{ asset('imgs/main-26.svg') }}" alt="">
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