<?php
require_once 'Connection.php';
class EmployeeModel extends Connection
{
    //read employees
    public function readEmployeesModel($table)
    {
        $sql = "SELECT firstname,lastname,tbl_employees_id_department,";
        $sql .= "dni,status,gender,insurance_number,tbl_employees_id_department,job FROM $table";
        $stmt = Connection::connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}