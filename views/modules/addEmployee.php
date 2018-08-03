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
                                    <li><a href="readEmployees" class=" waves-effect waves-block">Back</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">

                        <h2 class="card-inside-title"></h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                            <!-- form -->
                                <form method="post" action="index.php">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label for="frmAddEmployeeFirstName" class="control-label">Firstname</label>
                                                    <input name="frmAddEmployeeFirstName" id="frmAddEmployeeFirstName" type="text" class="form-control" placeholder="Firstname" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label for="frmAddEmployeeLastName" class="control-label">Lastname</label>
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
                                            <!-- general part -->
                                            <div role="tabpanel" class="tab-pane fade in active" id="general">
                                                <div class="row clearfix">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="frmAddEmployeeGender">GENDER</label>
                                                            <select class="form-control show-tick" data-live-search="true" name="frmAddEmployeeGender" id="frmAddEmployeeGender">
                                                                <option value="">-- Please select --</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group" style="">
                                                            <label for="frmAddEmployeeBirthDate">BIRTH DATE</label>
                                                            <div class="form-line">
                                                                <input type="text" class="date form-control" placeholder="Please choose a time..." name="frmAddEmployeeBirthDate" id="frmAddEmployeeBirthDate">
                                                            </div>
                                                        </div>
                                                        <label for="frmAddEmployeeNationality">NATIONALITY</label>
                                                        <select class="form-control show-tick" data-live-search="true" name="frmAddEmployeeNationality" id="frmAddEmployeeNationality">
                                                            <option value="">-- Please select --</option>
                                                            <option value="American">American</option>
                                                            <option value="Canadian">Canadian</option>
                                                            <option value="Mexican">Mexican</option>
                                                            <option value="Guatemalan">Guatemalan</option>
                                                            <option value="Salvadorian">Salvadorian</option>
                                                            <option value="Hondurian">Hondurian</option>
                                                        </select><br><br>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <label for="frmAddEmployeedni" class="control-label">DNI</label>
                                                                <input type="number" class="form-control" placeholder="DNI #" name="frmAddEmployeedni" id="frmAddEmployeedni">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="frmAddEmployeeCivilState">CIVIL STATE</label>
                                                            <select class="form-control show-tick" data-live-search="true" name="frmAddEmployeeCivilState" id="frmAddEmployeeCivilState">
                                                                <option value="">-- Please select --</option>
                                                                <option value="SINGLE">SINGLE</option>
                                                                <option value="MARRY">MARRY</option>
                                                                <option value="WIDOWHOOD">WIDOWHOOD</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="form-group">
                                                            <label for="frmAddEmployeeBirthState">BIRTH STATE</label>
                                                            <select class="form-control show-tick" data-live-search="true" name="frmAddEmployeeBirthState" id="frmAddEmployeeBirthState">
                                                                <option value="">-- Please select --</option>
                                                                <option value="LOS ANGELES">LOS ANGELES</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="frmAddEmployeeBirthCity">BIRTH CITY</label>
                                                            <select class="form-control show-tick" data-live-search="true" name="frmAddEmployeeBirthCity" id="frmAddEmployeeBirthCity">
                                                                <option value="">-- Please select --</option>
                                                                <option value="CALIFORNIA">CALIFORNIA</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="frmAddEmployeePlaceOfDniPrint">PLACE OF DNI PRINT </label>
                                                            <select class="form-control show-tick" data-live-search="true" name="frmAddEmployeePlaceOfDniPrint" id="frmAddEmployeePlaceOfDniPrint">
                                                                <option value="">-- Please select --</option>
                                                                <option value="LOS ANGELES">LOS ANGELES</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <label for="frmAddEmployeeSize" class="control-label">SIZE</label>
                                                                <input type="number" class="form-control" placeholder="Size mts..." name="frmAddEmployeeSize" id="frmAddEmployeeSize">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="frmAddEmployeeBloodType">BLOOD TYPE</label>
                                                            <select class="form-control show-tick" data-live-search="true" name="frmAddEmployeeBloodType" id="frmAddEmployeeBloodType">
                                                                <option value="">-- Please select --</option>
                                                                <option value="A+">A+</option>
                                                                <option value="A-">A-</option>
                                                                <option value="B+">B+</option>
                                                                <option value="B-">B-</option>
                                                                <option value="AB+">AB+</option>
                                                                <option value="AB-">AB-</option>
                                                                <option value="O+">O+</option>
                                                                <option value="O-">O-</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end general part -->
                                            <!-- location -->
                                            <div role="tabpanel" class="tab-pane fade" id="location">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeAdress" class="control-label">ADDRESS</label>
                                                            <input type="text" class="form-control" placeholder="Av, St" name="frmAddEmployeeAdress" id="frmAddEmployeeAdress">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeCellPhone" class="control-label">CELLPHONE</label>
                                                            <input type="text" class="form-control" placeholder="1234-4568-1455" name="frmAddEmployeeCellPhone" id="frmAddEmployeeCellPhone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeHomePhone" class="control-label">HOMEPHONE</label>
                                                            <input type="text" class="form-control" placeholder="1234-4568-1455" name="frmAddEmployeeHomePhone" id="frmAddEmployeeHomePhone">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeEmail" class="control-label">EMAIL</label>
                                                            <input type="email" class="form-control" placeholder="user@mail.com" name="frmAddEmployeeEmail" id="frmAddEmployeeEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <hr>
                                                    <p class="text-center">EMERGENCY CONTACT INFO</p>
                                                    <hr>
                                                    <div class="col-xs-4">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <label for="frmAddEmployeeEmergencyContactName" class="control-label">NAME</label>
                                                                <input type="text" class="form-control" placeholder="Name of emergency contact" name="frmAddEmployeeEmergencyContactName" id="frmAddEmployeeEmergencyContactName">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <label for="frmAddEmployeeEmergencyContactPhone" class="control-label">PHONE</label>
                                                                <input type="text" class="form-control" placeholder="1236-4545-7784" name="frmAddEmployeeEmergencyContactPhone" id="frmAddEmployeeEmergencyContactPhone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <label for="frmAddEmployeeEmergencyContactRelationship" class="control-label">RELATIONSHIP</label>
                                                                <input type="text" class="form-control" placeholder="Relationship" name="frmAddEmployeeEmergencyContactRelationship" id="frmAddEmployeeEmergencyContactRelationship">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- end location -->
                                            <!-- family -->
                                            <div role="tabpanel" class="tab-pane fade" id="family">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeFatherFirstName" class="control-label">FATHER FIRSTNAME</label>
                                                            <input type="text" class="form-control" placeholder="Father Firstname" name="frmAddEmployeeFatherFirstName" id="frmAddEmployeeFatherFirstName">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeFatherLastName" class="control-label">FATHER LASTNAME</label>
                                                            <input type="text" class="form-control" placeholder="Father Lastname" name="frmAddEmployeeFatherLastName" id="frmAddEmployeeFatherLastName">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeFatherPhone" class="control-label">FATHER PHONE</label>
                                                            <input type="text" class="form-control" placeholder="Father Phone" name="frmAddEmployeeFatherPhone" id="frmAddEmployeeFatherPhone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeFatherAttached" class="control-label">FATHER ATTACHED</label>
                                                            <input type="text" class="form-control" placeholder="Father Attached" name="frmAddEmployeeFatherAttached" id="frmAddEmployeeFatherAttached">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeMotherFirstName" class="control-label">MOTHER FIRSTNAME</label>
                                                            <input type="text" class="form-control" placeholder="MOTHER FIRSTNAME" name="frmAddEmployeeMotherFirstName" id="frmAddEmployeeMotherFirstName">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeMotherLastName" class="control-label">MOTHER LASTNAME</label>
                                                            <input type="text" class="form-control" placeholder="MOTHER LASTNAME" name="frmAddEmployeeMotherLastName" id="frmAddEmployeeMotherLastName">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeMotherPhone" class="control-label">MOTHER PHONE</label>
                                                            <input type="text" class="form-control" placeholder="Mother Phone" name="frmAddEmployeeMotherPhone" id="frmAddEmployeeMotherPhone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeMotherAttached" class="control-label">MOTHER ATTACHED</label>
                                                            <input type="text" class="form-control" placeholder="Mother Attached" name="frmAddEmployeeMotherAttached" id="frmAddEmployeeMotherAttached">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeCoupleFirstName" class="control-label">COUPLE FIRSTNAME</label>
                                                            <input type="text" class="form-control" placeholder="COUPLE FIRSTNAME..." name="frmAddEmployeeCoupleFirstName" id="frmAddEmployeeCoupleFirstName">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeCoupleLastName" class="control-label">COUPLE LASTNAME</label>
                                                            <input type="text" class="form-control" placeholder="COUPLE LASTNAME..." name="frmAddEmployeeCoupleLastName" id="frmAddEmployeeCoupleLastName">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeCouplePhone" class="control-label">COUPLE PHONE</label>
                                                            <input type="number" class="form-control" placeholder="2365-5632-7894" name="frmAddEmployeeCouplePhone" id="frmAddEmployeeCouplePhone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeCoupleAttached" class="control-label">COUPLE ATTACHED</label>
                                                            <input type="text" class="form-control" placeholder="COUPLE ATTACHED" name="frmAddEmployeeCoupleAttached" id="frmAddEmployeeCoupleAttached">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end family -->
                                            <!-- education -->
                                            <div role="tabpanel" class="tab-pane fade" id="education">
                                                <div class="col-xs-4">
                                                    <div class="form-group">
                                                        <label for="frmAddEmployeeScholarship">SCHOLARSHIP</label>
                                                        <select class="form-control show-tick" data-live-search="true" name="frmAddEmployeeScholarship" id="frmAddEmployeeScholarship">
                                                            <option value="">-- Please select --</option>
                                                            <option value="High School">High School</option>
                                                            <option value="University">University</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeLastPlaceOfStudies" class="control-label">LAST PLACE OF STUDIES</label>
                                                            <input type="text" class="form-control" placeholder="Last institute or university" name="frmAddEmployeeLastPlaceOfStudies" id="frmAddEmployeeLastPlaceOfStudies">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeProfession" class="control-label">PROFESSION</label>
                                                            <input type="text" class="form-control" placeholder="Works on ..." name="frmAddEmployeeProfession" id="frmAddEmployeeProfession">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end education -->
                                            <!-- admin -->
                                            <div role="tabpanel" class="tab-pane fade" id="admin">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeInsuranceNumber" class="control-label">INSURANCE NUMBER</label>
                                                            <input type="text" class="form-control" placeholder="Insurance Number" name="frmAddEmployeeInsuranceNumber" id="frmAddEmployeeInsuranceNumber">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeSocialNumber" class="control-label">SOCIAL NUMBER</label>
                                                            <input type="text" class="form-control" placeholder="# ..." name="frmAddEmployeeSocialNumber" id="frmAddEmployeeSocialNumber">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="frmAddEmployeeAttached">Attached</label>
                                                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..." name="frmAddEmployeeAttached" id="frmAddEmployeeAttached"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end admin -->
                                        </div>
                                        <!-- end tab content -->
                                        </div>
                                        <div class="col-xs-12">
                                        <button type="button" class="btn btn-primary m-t-15 waves-effect">SEND</button>
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
