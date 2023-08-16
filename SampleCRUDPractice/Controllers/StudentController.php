<?php

namespace Controllers;

include("../Dao/StudentDao.php");

use StudentDao;

class StudentController
{
   private StudentDao $studentDao;

   public function __construct(){

       $this->studentDao = new StudentDao();
}


public function findAll(){

  $students =  $this->studentDao->findAll();

   http_response_code(200);

   $jsonResponse ="[";
    for ($i = 0; $i <  count($students); $i++) {

        if ($i != count($students)-1){
            $jsonResponse .= $students[$i]->__toString().",";
        }

        else {
            $jsonResponse .= $students[$i]->__toString();
        }
   }

    $jsonResponse .= "]";

    echo $jsonResponse;
}

}