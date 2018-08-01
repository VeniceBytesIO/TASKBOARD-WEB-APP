<?php
class EmployeeController
{
    //read employees
    public function readEmployeesController()
    {
        $resp = EmployeeModel::readEmployeesModel('employees');
        return $resp;
    }
}