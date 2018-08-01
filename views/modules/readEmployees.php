<?php
session_start();
if (!$_SESSION['validateLogin']) {
    header('Location:login');
}
require_once "navbar.php";
require_once "sidebar.php";
$employees = new EmployeeController();
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>EMPLOYEES</h2>
        </div>
        <!-- form -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EMPLOYEE LIST
                            <small>General view of employees.</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="addEmployee" class=" waves-effect waves-block">Add Employee</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">

                        <h2 class="card-inside-title"></h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td>Firstname</td>
                                            <td>Lastname</td>
                                            <td>DNI</td>
                                            <td>Status</td>
                                            <td>Gender</td>
                                            <td>Age</td>
                                            <td>Insurance Number</td>
                                            <td>Department</td>
                                            <td>Job</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $table = $employees->readEmployeesController();
                                        //var_dump($table);
                                        foreach ($table as $key => $value) {
                                            echo '<tr>
                                            <td>'.$value['firstname'].'</td>
                                            <td>'.$value['lastname'].'</td>
                                            <td>'.$value['tbl_employees_id_department'].'</td>
                                            <td>'.$value['dni'].'</td>
                                            <td>'.$value['status'].'</td>
                                            <td>'.$value['gender'].'</td>
                                            <td>'.$value['insurance_number'].'</td>
                                            <td>'.$value['tbl_employees_id_department'].'</td>
                                            <td>'.$value['job'].'</td>
                                        </tr>';
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end form -->
    </div>
</section>