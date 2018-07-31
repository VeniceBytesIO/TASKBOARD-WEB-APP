<?php
require_once 'Connection.php';
class AuthModel extends Connection
{
    //validation to login
    public function authUserModel($table, $data)
    {
        $sql = "SELECT $table.user, $table.password FROM $table";
        $sql .= " WHERE $table.user = :user ";
        $stmt = Connection::connect()->prepare($sql);
        $stmt->bindParam(':user', $data['user'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //get the value of attempt column of user that tries to login
    public function getAttemptModel($table, $data)
    {
        $sql = "SELECT $table.attempt FROM $table WHERE $table.user=:user";
        $stmt = Connection::connect()->prepare($sql);
        $stmt->bindParam(':user', $data, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //update the value of attempt column of user that tires to login
    public function updateAttemptModel($table, $data)
    {
        $sql = "UPDATE $table SET $table.attempt=:attempt WHERE $table.user=:user";
        $stmt = Connection::connect()->prepare($sql);
        $stmt->bindParam(':user', $data['user'], PDO::PARAM_STR);
        $stmt->bindParam(':attempt', $data['attempt'], PDO::PARAM_INT);
        if ($stmt->execute()) {
            return 'success';
        }else{
            return 'error';
        }
    }
    //get the security question of the user that tries to login
    public function getSecurityQuestionModel($table, $data)
    {
        $sql = "SELECT $table.security_question FROM $table WHERE $table.user=:user";
        $stmt = Connection::connect()->prepare($sql);
        $stmt->bindParam(':user', $data, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //evaluate the security answer
    public function evaluateSecurityAnswerModel($table, $data)
    {
        $sql = "SELECT $table.security_answer FROM $table ";
        $sql .= "WHERE $table.user=:user AND ";
        $sql .= "$table.security_question=:securityQuestion";
        $stmt = Connection::connect()->prepare($sql);
        $stmt->bindParam(':user', $data['user'], PDO::PARAM_STR);
        $stmt->bindParam(':securityQuestion', $data['securityQuestion'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //update the password of the user
    public function updatePasswordModel($table, $data)
    {
        $sql = "UPDATE $table SET $table.password=:password WHERE $table.user=:user";
        $stmt = Connection::connect()->prepare($sql);
        $stmt->bindParam(':user', $data['user'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return 'success';
        }else{
            return 'error';
        }
    }
    
}