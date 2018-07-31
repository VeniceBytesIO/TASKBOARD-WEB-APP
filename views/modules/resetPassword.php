<?php 
    $auth = new AuthController();
    $updatePassword = $auth->updatePasswordController();
    $alert = false;
    if ($updatePassword=='success') {
        header('Location:login');
    }elseif($updatePassword=='noMatch'){
        $alert = true;
        $alertMsj = 'Password and Confirm Password does not match';
    }elseif($updatePassword=='emptyFields'){
        $alert = true;
        $alertMsj = 'All fields are required';
    }
?>
<!-- THIS BODY TAG DOES NOT CLOSE BECAUSE ITS HARDCODED TO GET ALL WIDTH AND HEIGHT JUST IN THESE PAGE OF THAT COLOR  -->
<body  style="background-color: #00BCD4;">
    <div class="login-page">
        <div class="login-box">
            <div class="logo">
                <a href="javascript:void(0);">Task<b>Board</b></a>
                <small>A web Application of VeniceBytes.io</small>
            </div>
            <div class="card">
                <div class="body">
                    <form id="sign_in" method="POST">
                        <div class="msg">Reset your password.</div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="frmResetPasswordPassword" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="frmResetPasswordConfirmPassword" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-xs-offset-3">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">CHANGE PASSWORD</button>
                            </div>
                        </div>
                        <?php 
                            if ($alert) {
                                echo '<div class="alert bg-red alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        '.$alertMsj.'
                                    </div>';
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="views/js/pages/examples/sign-in.js"></script>
