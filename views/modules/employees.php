<?php 
require_once "navbar.php";
require_once "sidebar.php"; 
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>AGENTES</h2>
        </div>

        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>INFORMACION GENERAL AGENTES</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar un nuevo agente</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Puesto</th>
                                        <th>Rol</th>
                                        <th>Salario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Fernando</td>
                                        <td>Ixcotoyac</td>
                                        <td>Acma</td>
                                        <td>
                                            <span class="label bg-red">Suervisor</span>
                                        </td>
                                        <td>Q 2,500.00</td>
                                    </tr>

                                    <tr>
                                        <td>Antonio</td>
                                        <td>Lopez</td>
                                        <td>Acma</td>
                                        <td>
                                            <span class="label bg-blue">Agente</span>
                                        </td>
                                        <td>Q 2,200.00</td>
                                    </tr>

                                    <tr>
                                        <td>Pedro</td>
                                        <td>Perez</td>
                                        <td>Trinidad</td>
                                        <td>
                                            <span class="label bg-blue">Agente</span>
                                        </td>
                                        <td>Q 2,300.00</td>
                                    </tr>

                                    <tr>
                                        <td>Jose</td>
                                        <td>Caal Icoo</td>
                                        <td>Trinidad</td>
                                        <td>
                                            <span class="label bg-red">Supervisor</span>
                                        </td>
                                        <td>Q 2,650.00</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
        </div>

    </div>
</section>