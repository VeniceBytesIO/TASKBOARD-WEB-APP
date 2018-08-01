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
                            ADD EMPLOYEE
                            <small>form to create new employee.</small>
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
                            <!-- form -->
                                <form method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label for="firstname" class="control-label">Firstname</label>
                                                    <input name="frmAddEmployeeFirstName" id="frmAddEmployeeFirstName" type="text" class="form-control" placeholder="Firstname" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label for="firstname" class="control-label">Lastname</label>
                                                    <input name="frmAddEmployeeLastName" id="frmAddEmployeeLastName" type="text" class="form-control" placeholder="Lastname" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <!-- navtabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#general" data-toggle="tab">
                                                    <i class="material-icons">face</i> GENERAL
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#location" data-toggle="tab">
                                                    <i class="material-icons">phone</i> LOCATION
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#family" data-toggle="tab">
                                                    <i class="material-icons">home</i> FAMILY
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#education" data-toggle="tab">
                                                    <i class="material-icons">school</i> EDUCATION
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#admin" data-toggle="tab">
                                                    <i class="material-icons">settings</i> ADMIN
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- end navtabs -->
                                        <!-- tab content -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="general">
                                                <!-- <div class="row">
                                                    <div class="col-sm-4">
                                                    <label for="">GENDER</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="M">M</option>
                                                            <option value="F">F</option>
                                                        </select>        
                                                    </div>
                                                </div>




                                                <select class="selectpicker form-control" data-live-search="true">
                                                    <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                                </select> -->


                                        <div class="row clearfix">
                                            <div class="col-sm-4">
                                                <p>
                                                    GENDER
                                                </p>
                                                <select class="form-control show-tick" data-live-search="true">
                                                    <option value="">-- Please select --</option>
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="40">40</option>
                                                    <option value="50">50</option>
                                                </select>
                                            </div>

                                            <div class="col-xs-4">
                                                <p>
                                                    FECHA DE NACIMIENTO
                                                </p>
                                                <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                            </div>
                                        </div>

                                        





                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="location">
                                                <b>Profile Content</b>
                                                <p>
                                                    location.
                                                </p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="family">
                                                <b>Message Content</b>
                                                <p>
                                                    family.
                                                </p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="education">
                                                <b>Settings Content</b>
                                                <p>
                                                    education.
                                                </p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="admin">
                                                <b>Settings Content</b>
                                                <p>
                                                    admin.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end tab content -->
                                        </div>
                                    </div>
                                </form>
                                <!-- end form -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end form -->
    </div>
</section>
