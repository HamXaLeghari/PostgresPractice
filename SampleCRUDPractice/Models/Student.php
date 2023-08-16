<?php

namespace Models;

class Student
{

    private $id;
    private $firstName;
    private $lastName;

    private $age;

    private $semester;


    public function __construct($firstName, $lastName, $age, $semester)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->semester = $semester;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id): Student
    {
        $this->id = $id;

        return $this;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName): Student
    {
        $this->firstName = $firstName;

        return $this;
    }


    public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName): Student
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAge()
    {
        return $this->age;


    }


    public function setAge($age): Student
    {
        $this->age = $age;
        return $this;
    }


    public function getSemester()
    {
        return $this->semester;
    }


    public function setSemester($semester): Student
    {
        $this->semester = $semester;

        return $this;
    }

    public function __toString(): string
    {
        return "{id=".$this->id.", firstName=".$this->firstName.", lastName=".$this->lastName.", age=".$this->age.", semester=".$this->semester."}";
    }


}