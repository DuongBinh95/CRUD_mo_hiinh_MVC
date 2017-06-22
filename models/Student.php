<?php

/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/14/17
 * Time: 10:36 AM
 */
class Student
{
    private $id_student;
    private $name_student;
    private $dob;
    private $address;
    private $email;
    private $phone;
    
    function __construct($id_student = 0, $name_student = NULL, $dob = NULL, $address = NULL, $email =NULL, $phone = NULL)
    {
        $this->id_student =$id_student;
        $this->name_student =$name_student;
        $this->dob =$dob;
        $this->address =$address;
        $this->email =$email;
        $this->phone =$phone;
    }

    /**
     * @return int
     */
    public function getIdStudent()
    {
        return $this->id_student;
    }

    /**
     * @param int $id_student
     */
    public function setIdStudent($id_student)
    {
        $this->id_student = $id_student;
    }

    /**
     * @return null
     */
    public function getNameStudent()
    {
        return $this->name_student;
    }

    /**
     * @param null $name_student
     */
    public function setNameStudent($name_student)
    {
        $this->name_student = $name_student;
    }

    /**
     * @return null
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param null $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param null $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param null $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


}