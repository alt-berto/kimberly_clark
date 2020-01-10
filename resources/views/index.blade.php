
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section id="mainWrapperCCC">
    <div class="introCCC row">
      <div class="col-md-6">
        <div class="centerFit">
        <h1>Bienvenido a tu
          Entrenamiento
          de Ciclo de
          Caja</h1>
    
        <h4>¡Juntos sumamos más!</h4>
          <br>

          <a class="btn btn-primary btn-lg blueButton" href="{{ URL::to('/page/1') }}">¡Comencemos!</a>
          <button id="btn_audio" type="button" class="btn_audio btn btn-secondary btn-lg blueButton">Pausa <i class="fas fa-play"></i></button>
        </div>
      </div>
      <div class="col-md-6 mainBG">
        <img src="imgs/home-page-intro.png" alt="">
      </div>
    
    </div><!--CLOSE INTRO CCC-->
    
      <footer class="NexFooter row">
        <div class="col-md-6">

        </div>
        <div class="pageBox" style="bottom: 20%; right: 45px;">
          <audio id="myAudio">
              <source src="{{ asset( 'audio/home.ogg' ) }}" type="audio/ogg">
              <source src="{{ asset( 'audio/home.mp3' ) }}" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
        </div>
      
 
        </div>
      </footer>    
</section><!--CLOSE MAIN WRAPPER-->

@stop