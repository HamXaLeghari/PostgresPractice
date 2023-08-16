<?php

namespace Util;

class DbConnection
{

   private string $host;
   private string $port;

   private string $dbName;

   private string $user;

   private string $password;



    public function __construct($host, $port, $dbName, $user, $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect(){

        //  pg_connect("host=localhost port=5432 dbname=student_management_db user=postgres password=12345");

        return pg_connect("host=" .$this->host
            ." port=".$this->port
            . " dbname=".$this->dbName
            ." user=".$this->user
            ." password=".$this->password);

    }


    public function getHost()
    {
        return $this->host;
    }


    public function setHost($host)
    {
        $this->host = $host;
    }


    public function getPort()
    {
        return $this->port;
    }


    public function setPort($port)
    {
        $this->port = $port;
    }


    public function getDbName()
    {
        return $this->dbName;
    }


    public function setDbName($dbName)
    {
        $this->dbName = $dbName;
    }


    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

}