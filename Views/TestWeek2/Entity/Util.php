<?php
include_once ("../Model/model.php");
//include_once "Employee.php";
class Util extends Model
{
    private $model;

     //    /**
//     * Util constructor.
//     * @param Employee $employee
//     */
//
    public function __construct()
    {
        $this->model = new Model();

//        $name =$employee->getName();
//        $birthday = $employee->getBirthday();
//        $address = $employee->getAddress();
//        $salary = $employee->getSarary();
    }
//
//    /**
//     * @return array|void|null
//     */

    public function getAll(){
      $query =  "select * from quanLyNhanVien";
      return $this->model->getAll($query);
    }
//
//    /**
//     * @param Employee $employee
//     */
//    public function insert(Employee $employee)
//    {
//        $name =$employee->getName();
//        $birthday = $employee->getBirthday();
//        $address = $employee->getAddress();
//        $salary = $employee->getSarary();
//        $this->execute("insert into quanLyNhanVien (name,birthday,address,salary)values (".$name.",".$birthday.",".$address.",".$salary);
//    }
//    public function sortEmployee($listEmployee){
//
//        usort($listEmployee,function ($a,$b){
//            $sort = $a->salary -$b->salary;
//            $sort.= strcmp($a->salary,$b->salary);
//        });
//    }

}

$salary = new Util();
var_dump($salary->getAll());
