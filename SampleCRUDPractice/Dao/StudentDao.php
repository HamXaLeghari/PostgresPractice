<?php

namespace Dao;

use Models\Student;
use Util\DbConnection;

include("../Util/DbConnection.php");
include ("../Models/Student.php");

class StudentDao
{

    private $dbConnection;

    public function __construct(){

        $this->dbConnection = new DbConnection("student_management_db","5432","localhost","postgres","12345");

      $this->dbConnection = $this->dbConnection->connect();
    }

    public function findAll(){

        $result = pg_query($this->dbConnection,"SELECT * FROM student");

        $students = Array();

        while($row = pg_fetch_row($result)){

            $student = new Student($row[1],$row[2],$row[3],$row[4]);

            $student->setId($row[0]);

            array_push($students,$student);
        }

        return $students;

    }


    function addStudent(Student $student){

        $studentProps = Array(
            "id"=> $student->getId(),
            "first_name"=>$student->getFirstName(),
            "last_name"=>$student->getLastName(),
            "age"=> $student->getAge(),
            "semester"=> $student->getSemester()
        );

       return pg_insert($this->dbConnection,"student",$studentProps);
    }
}




