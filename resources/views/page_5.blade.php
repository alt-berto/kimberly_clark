
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
                <h1 class="mainTitle">¿Por qué se presta atención a la liquidez?</h1>    
                <img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">
            </nav>
            <div class="container-fluid contentBox">
                <div class="content3">
                    <div class="topLineColor"></div>
                    <img class="mainImg" src="{{ asset('imgs/page3-bg.png') }}" alt="">
                </div><!-- /.container-fluid -->
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