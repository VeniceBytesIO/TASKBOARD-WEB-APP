<?php 
    $auth = new AuthController();
    $securityQuestion = $auth->getSecurityQuestionController();
    $validateAnswer = $auth->evaluateSecurityAnswerController();
    if ($validateAnswer=='success') {
        header('Location:?action=resetPassword&user='.$_GET['user']);
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
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="views/js/pages/examples/sign-in.js"></script>
