
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

    <section>
        <div id="wrapper">
            <!-- Sidebar -->
            <side-menu-component page-num="{{ $page }}"></side-menu-component>
            <!-- -->
            <div id="content-wrapper" class="purple2BoxMain">
                <nav class="navbar static-top">
                    <h1 class="mainTitle">Playbook de CCC
                    </h1>
                </nav>
                <div class="container-fluid">
                   <div class="col-md-6 animated bounceInUp">
                       <img src="{{ asset('imgs/cccplaybook12.png') }}" alt="">
                   </div>

                    <div class="col-md-6">
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