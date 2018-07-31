<?php 
    $auth = new AuthController();
    $verify = $auth->authUserController();
    $alert = false;
    if ($verify=='success') {
        header('Location:dashboard');
    }elseif($verify==='error'){
        $alert = true;
        $alertMsj = 'User or Password does not match!';
    }elseif($verify==='resetPassword'){
        header('Location:index.php?action=securityQuestion&user='.$_POST['frmLoginUser']);
    }elseif($verify==='emptyFields'){
        $alert = true;
        $alertMsj = 'All fields are required!';
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
                        <div class="msg">Logueate para iniciar sesión.</div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="frmLoginUser" placeholder="Usuario" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="frmLoginPassword" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-xs-offset-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
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
                        <div class="row m-t-15 m-b--20">
                            <div class="col-xs-12 align-center">
                                <a href="forgotPassword">Forgot your password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="views/js/pages/examples/sign-in.js"></script>
