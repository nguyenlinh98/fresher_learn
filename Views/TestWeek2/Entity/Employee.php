<?php

class Employee
{
    private $name;
    private $address;
    private $birthday;
    private $salary;

    /**
     * Employee constructor.
     * @param $name
     * @param $address
     * @param $birthday
     * @param $salary
     */
    public function __construct($name, $address, $birthday, $salary)
    {
        $this->name = $name;
        $this->address = $address;
        $this->birthday =$birthday;
        $this->salary =$salary;
    }

    /**
     * @return mixed
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @return mixed
     */

    public function getAddress(){
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getBirthday(){
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getSarary()
    {
        return $this->salary;
    }

    /**
     * @param $name
     */

    public function setName($name)
    {
        $this->name =$name;
    }

    /**
     * @param $address
     */

    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param $birthday
     */

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }
}
