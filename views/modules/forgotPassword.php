<?php 
    $auth = new AuthController();
    $redirect = $auth->validateForgotPasswordController();
    $alert = false;
    if (isset($_POST['frmForgotPasswordUser'])) {
        if ($redirect==='emptyFields') {
            $alert = true;
            $alertMsj = 'All fields are required!';
        }elseif($redirect==='error'){
            $alert = true;
            $alertMsj = 'User does not exist!';
        }elseif($redirect==='success'){
            header('Location:index.php?action=securityQuestion&user='.$_POST['frmForgotPasswordUser']);
        }
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
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                            <input type="text" class="form-control" name="frmForgotPasswordUser" value="" autofocus required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-xs-offset-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">SEND</button>
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
