
<!-- Extends template page from includes directory-->
@extends('layout.base')

<!-- Specify content -->
@section('content')

    <section>
        <div id="wrapper">
            <!-- Sidebar -->
            <side-menu-component page-num="{{ $page }}"></side-menu-component>
            <!-- -->
            <div id="content-wrapper" class="purpleBoxMain">
                <nav class="navbar static-top">
                    <h1 class="mainTitle">Playbook de CCC
                    </h1>
                </nav>
                <div class="container-fluid">
                   <div class="col-md-6 animated bounceInUp">
                       <img src="{{ asset('imgs/enfoques-icon.svg') }}" alt="">
                   </div>

                    <div class="col-md-5">
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