<?php


Abstract class Person
{

    private $id;
    private $name;
    private $class;
    private $phone;
    private $email;
    private $birthday;


    /**
     * Person constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $this->id = $object['id'];
        $this->name = $object['name'];
        $this->class = $object['class'];
        $this->phone = $object['phone'];
        $this->email = $object['email'];
        $this->birthday = $object['birthday'];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */

    public function getClass()
    {
        return $this->class;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */

    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param $name
     * @return mixed
     */

    public function setName($name)
    {
        return $this->name = $name;
    }

    /**
     * @param $phone
     * @return mixed
     */

    public function setPhone($phone)
    {
        return $this->phone = $phone;
    }

    /**
     * @param $email
     * @return mixed
     */

    public function setEmail($email)
    {
        return $this->email = $email;
    }

    /**
     * @param $class
     * @return mixed
     */

    public function setClass($class)
    {
        return $this->class = $class;
    }

    /**
     * @param $birthday
     * @return mixed
     */

    public function setBirthday($birthday)
    {
        return $this->birthday = $birthday;
    }

}