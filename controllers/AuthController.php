<?php 
class AuthController
{
    //validation for login
    public function authUserController()
    {
        if (isset($_POST['frmLoginUser']) && 
            isset($_POST['frmLoginPassword'])
        ) {
            if (!empty($_POST['frmLoginUser']) && !empty($_POST['frmLoginPassword'])) {
                $data = array('user'=>$_POST['frmLoginUser'], 
                        'password'=>$_POST['frmLoginPassword']);
                $resp = AuthModel::authUserModel('users', $data);
                //var_dump($resp);
                if ($resp['user'] === $_POST['frmLoginUser'] &&
                    $resp['password'] === $_POST['frmLoginPassword']
                ) {;
                    session_start();
                    $_SESSION['validateLogin'] = true;
                    return 'success';
                }else{
                    $attempt = $this->getAttemptController($_POST['frmLoginUser']);
                    if ($attempt<2) {
                        $updateAttempt = $attempt + 1;
                        $this->updateAttemptController($_POST['frmLoginUser'], $updateAttempt);
                        $advise = 'error';
                    }elseif($attempt>=2){
                        $updateAttempt = 0;
                        $this->updateAttemptController($_POST['frmLoginUser'], $updateAttempt);
                        $advise = 'resetPassword';
                    }
                    return $advise;
                }
            }else{
                return 'emptyFields';
            }
        }
    }
    //get the value of attempt column of user that tries to login
    public function getAttemptController($user)
    {
        $data = $user;
        $resp = AuthModel::getAttemptModel('users', $data);
        $total = $resp['attempt'];
        return $total;
    }
    //update the value of attempt columno of user that tries to login
    public function updateAttemptController($user, $updateAttempt)
    {
        $data = array('user'=>$user, 'attempt'=>$updateAttempt);
        $resp = AuthModel::updateAttemptModel('users', $data);
    }
    //get the security question of the user that tries to login
    public function getSecurityQuestionController()
    {
        if (isset($_GET['user']) && !empty($_GET['user'])) {
            $data = $_GET['user'];
            $resp = AuthModel::getSecurityQuestionModel('users', $data);
            //var_dump($resp);
            $securityQuestion = $resp['security_question'];
            return $securityQuestion;
        }
    }
    //evalute the security answer
    public function evaluateSecurityAnswerController()
    {
        if (isset($_POST['frmSecurityQuestionQuestion']) &&  
            isset($_POST['frmSecurityQuestionAnswer']))
        {
            if (!empty($_POST['frmSecurityQuestionQuestion'])  && 
                !empty($_POST['frmSecurityQuestionAnswer'])) {
                $data = array('user'=>$_GET['user'], 
                'securityQuestion'=>$_POST['frmSecurityQuestionQuestion']);
                $resp = AuthModel::evaluateSecurityAnswerModel('users', $data);
                //var_dump($resp);
                if ($resp['security_answer']==$_POST['frmSecurityQuestionAnswer']) {
                    return 'success';
                }else{
                    return 'error';
                }
            }else{
                return 'emptyFields';
            }
        }
    }
    //update password of the user
    //update the password of the user
    public function updatePasswordController()
    {
        if (isset($_POST['frmResetPasswordPassword']) &&
            isset($_POST['frmResetPasswordConfirmPassword'])
        ) {
            if (!empty($_POST['frmResetPasswordPassword']) && !empty($_POST['frmResetPasswordConfirmPassword'])) {
                if ($_POST['frmResetPasswordPassword']==$_POST['frmResetPasswordConfirmPassword']) {
                    $data = array('user'=>$_GET['user'], 
                                'password'=>$_POST['frmResetPasswordPassword']);
                    $resp = AuthModel::updatePasswordModel('users', $data);
                    return $resp;
                }else{
                    return 'noMatch';
                }
            }else{
                return 'emptyFields';
            }
        }
    }
    //validate the forgotPassword form to redirecto to resetPassword form
    public function validateForgotPasswordController()
    {
        if (!empty($_POST['frmForgotPasswordUser'])) {
            $data = $_POST['frmForgotPasswordUser'];
            $resp = AuthModel::validateForgotPasswordModel('users', $data);
            $total = (int)$resp['total'];
            $advise = ($total>0) ? 'success' : 'error' ;
            return $advise;
        }else{
            return 'emptyFields';
        }
    }
}
