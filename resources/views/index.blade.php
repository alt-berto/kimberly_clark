
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
        </div>
      </div>
      <div class="col-md-6 mainBG">
        <img src="imgs/home-page-intro.png" alt="">
      </div>
    
    </div><!--CLOSE INTRO CCC-->
    
      <footer class="NexFooter row">
        <div class="col-md-6">
          <a class="nextArrow" href="{{ URL::to('/page/1') }}"><img src="imgs/arrow-next.svg" alt=""></a>
        </div>
        <div class="col-md-6">
          <p class="pageNumber">Home</p>
        </div>
      </footer>    
</section><!--CLOSE MAIN WRAPPER-->

@stop