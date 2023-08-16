<?php

use Util\DbConnection;

include("../Constants/DatabaseConstants.php");
include("../Util/DbConnection.php");
include("../Models/Student.php");

class StudentDao {

    private $dbConnection;

    function __construct(){

        $this->dbConnection = new DbConnection(
            DatabaseConstants::DB_HOST,
            DatabaseConstants::DB_PORT,
            DatabaseConstants::DB_NAME,
            DatabaseConstants::DB_USER,
            DatabaseConstants::DB_PASSWORD
        );

       $this->dbConnection = $this->dbConnection->connect();
    }

    function findAll(){

       $result =  pg_query($this->dbConnection,"SELECT * FROM student");

       $students = Array();

       while($row = pg_fetch_row($result)){

           $student = new Student($row[1],$row[2],$row[3],$row[4]);
           $student->setId($row[0]);

           array_push($students,$student);
       }

       return $students;
    }

}


$studentDao = new StudentDao();


$studentArray = $studentDao->findAll();

foreach ($studentArray as $student){

    echo "id= ".$student->getId()." firstName= ".$student->getFirstName()." lastName= ".$student->getLastName()." semester= ".$student->getSemester();
}