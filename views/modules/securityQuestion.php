<?php 
    $auth = new AuthController();
    $securityQuestion = $auth->getSecurityQuestionController();
    $validateAnswer = $auth->evaluateSecurityAnswerController();
    $alertNotification = false;
    if ($validateAnswer=='success') {
        header('Location:resetPassword');
    }else{
        $alertNotification = true;
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
                        <div class="msg">Answer your security question.</div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">help</i>
                            </span>
                            <div class="form-line">
                            <input type="text" class="form-control" name="frmSecurityQuestionQuestion" value="<?php echo $securityQuestion; ?>" readonly>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="password" class="form-control" name="frmSecurityQuestionAnswer" placeholder="Answer" required autofocus>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-xs-offset-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">INGRESAR</button>
                            </div>
                        </div>
                        <?php 
                            if ($alertNotification) {
                                echo '<div class="alert bg-red alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        Answer is incorrect, please try again!
                                    </div>';
                            }
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
