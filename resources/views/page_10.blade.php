
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
                <h1 class="mainTitle">Vehículos Financieros</h1>    
                <img class="iconLogo" src="{{ asset('imgs/icon-vehiculos.svg') }}" alt="">
            </nav>
            <div class="container-fluid">
                <div class="row bgGreen">
                    <div class="col-md-8">
                        <br>
                        <br>
                        <img class="animated slideInLeft" src="{{ asset('imgs/vehiculos-financieros.png') }}" alt="">
                    </div>
                    <div class="col-md-4">
            
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