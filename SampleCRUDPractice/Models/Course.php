<?php

namespace Models;

class Course
{
    private $id;
    private $name;

    private $description;

    private $creditHr;

    public function __construct($id, $name, $description, $creditHr)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->creditHr = $creditHr;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description): void
    {
        $this->description = $description;
    }


    public function getCreditHr()
    {
        return $this->creditHr;
    }


    public function setCreditHr($creditHr): void
    {
        $this->creditHr = $creditHr;
    }

}