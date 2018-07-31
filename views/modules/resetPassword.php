<?php 
    $auth = new AuthController();
    $updatePassword = $auth->updatePasswordController();
    if ($updatePassword=='success') {
        header('Location:login');
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
                            <div class="col-xs-4 col-xs-offset-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">INGRESAR</button>
                            </div>
                        </div>
                        <?php 
                            
                        ?>
                        <div class="row m-t-15 m-b--20">
                            <div class="col-xs-12 align-center">
                                <a href="forgot-password.html">Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="views/js/pages/examples/sign-in.js"></script>
