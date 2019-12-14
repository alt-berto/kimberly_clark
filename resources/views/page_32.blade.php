
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
                    <h1 class="mainTitle">¿Cómo desde tu
                    </h1>
                    <h2>rol de influencias el CCC?</h2>
                </nav>
                <div class="container-fluid row">
                   <div class="col-md-6 animated bounceInUp">
                       <div class="col-md-6">
                           <img src="{{ asset('imgs/icon-otc.svg') }}" alt="">
                       </div>
                       <div class="col-md-6">
                           <img src="{{ asset('imgs/icon-ptp.svg') }}" alt="">
                       </div>

                   </div>
                    <div class="col-md-6 animated bounceInDown">
                        <div class="col-md-6">
                            <img src="{{ asset('imgs/icon-atr.svg') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imgs/icon-treasury.svg') }}" alt="">
                        </div>

                    </div>

                    <div class="col-md-6">
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