
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

    <section>
        <div id="wrapper">
            <!-- Sidebar -->
            <side-menu-component page-num="{{ $page }}"></side-menu-component>
            <!-- -->
            <div id="content-wrapper" class="blue2BoxMain">
                <nav class="navbar static-top">
                    <h1 class="mainTitle">Algunos tips: Do’s and Don’ts
                    </h1>
                </nav>
                <div class="container-fluid">
                    <div class="donts">
                        <img src="{{ asset('imgs/donts-bg.jpg') }}" alt="">
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