<?php 
require_once "navbar.php";
require_once "sidebar.php"; 
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>SEGUROS</h2>
        </div>

        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>AGREGAR SEGUROS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">



    
                        
                        <form action="">
                            <div class="form-group">
                                <label for="control-label">Compañia de seguros</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="control-label">Monto asignado</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="control-label">Tipo de pago</label>
                                <select class="form-control" name="" id="">
                                    <option value="">Pago en Agencia</option>
                                    <option value="">Pago en Linea Portal BI</option>
                                    <option value="">Pago en Linea Portal Banrural</option>
                                    <option value="">Pago en Linea Portal GYT</option>
                                    <option value="">Pago en Linea Portal Banco de los trabajadores</option>
                                    <option value="">Pago en Linea Portal CHN</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-xs-4 col-xs-offset-4">
                                    <button class="btn btn-block bg-pink waves-effect" type="submit">Guardar seguro</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
        </div>

    </div>
</section>