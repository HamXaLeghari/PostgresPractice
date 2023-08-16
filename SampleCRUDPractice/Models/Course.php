<?php

class Course
{
    private $id;
    private $name;
    private $description;
    private $creditHr;



    public function __construct($name, $description, $creditHr)
    {

        $this->name = $name;
        $this->description = $description;
        $this->creditHr = $creditHr;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }





    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }


    public function getCreditHr()
    {
        return $this->creditHr;
    }


    public function setCreditHr($creditHr)
    {
        $this->creditHr = $creditHr;

        return $this;
    }
}