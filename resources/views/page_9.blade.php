
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <side-menu-component page-num="{{ $page }}"></side-menu-component>
        <!-- -->
        <div id="content-wrapper" class="greenBoxMain">
            <nav class="navbar static-top">    
                <h1 class="mainTitle">Vehículos Financiero</h1>    
                <img class="iconLogo" src="{{ asset('imgs/icon-vehiculos.svg') }}" alt="">
            </nav>
            <div class="container-fluid">
                <div class="circleBox row">
                    <div class="col-md-7 circleOptions">
                        <div class="circlesEachOption animated zoomInLeft">
                            <a class="animated bounceIn buble circleBlue1 mainCircleBlue" href=""><img src="{{ asset('imgs/dia0-icon.svg') }}" alt=""></a>
                            <a class="buble circleBlue2" href=""><img src="{{ asset('imgs/dia-46-icon.svg') }}" alt=""></a>
                            <a class="buble circleBlue3" href=""><img src="{{ asset('imgs/dia-16-icon.svg') }}" alt=""></a>
                            <a class="buble circleBlue4" href=""><img src="{{ asset('imgs/dia-15-icon.svg') }}" alt=""></a>
                            <a class="buble circleBlue5" href=""><img src="{{ asset('imgs/dia8-10-icon.svg') }}" alt=""></a>
                            <a class="buble circleBlue6" href=""><img src="{{ asset('imgs/dia8-icon.svg') }}" alt=""></a>
            
                            <div class="mainBlue">
                                <img class="circlesBlueImg" src="{{ asset('imgs/pogramacionMain.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mainBG">
                        <img src="{{ asset('imgs/page9-bg.png') }}"/>
                    </div>
                </div>
            </div><!-- /.container-fluid -->        
        </div>
        <!-- /.content-wrapper -->        
    </div>
    <!-- /#wrapper -->

    <div class="pageBox">
        <p><strong>{{ $page }}</strong></p>
    </div>
</section><!--CLOSE MAIN WRAPPER-->

@stop