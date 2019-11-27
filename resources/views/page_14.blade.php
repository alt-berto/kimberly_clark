
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
                <h1 class="mainTitle">Quiz DSO</h1>    
                <!--<img class="iconLogo" src="{{ asset('imgs/icon-logo.svg') }}" alt="">-->
            </nav>
            <div class="container-fluid contentBox quizBox">
                <div class="content3">
                    <div class="topLineColor"></div>
                    <div class="quizInfo">
                        <p class="animated bounceInDown">3. De la siguiente lista, elija los que componen las cuentas por cobrar en KC:</p>
                        
                        <ul class="animated rubberBand">
                            <li>
                                <input type="checkbox" name="verdadero" value="verdadero" id="id_true">
                                <label for="id_true">Cartera intercompany o consolidadas</label>
                            </li>
                            <li>
                                <input type="checkbox" name="verdadero" value="verdadero" id="id_true2">
                                <label for="id_true2">Inventario de producto terminado
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="verdadero" value="verdadero" id="id_true3">
                                <label for="id_true3">Impuestos por cobrar
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="verdadero" value="verdadero" id="id_true4">
                                <label for="id_true4">Impuestos por pagar
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="verdadero" value="verdadero" id="id_true5">
                                <label for="id_true5">Pago de servicios públicos y arriendos
                                </label>
                            </li>
                        </ul>
                        <div class="boxWhite">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                deplegar respuesta correcta
                            </button>
                        
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                            
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                            
                                        <div class="modal-body">
                                            ¡Excelente! Los pagos de servicios públicos, impuestos por pagar y el inventario de producto terminado no son componentes del DSO pero sí del CCC 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                          
                          
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