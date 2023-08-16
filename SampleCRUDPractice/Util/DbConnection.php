<?php

namespace Util;

class DbConnection
{
    private String $dbName;
    private String $port;
    private String $host;

    private String $user;
    private String $password;


    public function __construct(string $dbName, string $port, string $host, string $user, string $password)
    {
        $this->dbName = $dbName;
        $this->port = $port;
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
    }


    public function getDbName(): string
    {
        return $this->dbName;
    }


    public function setDbName(string $dbName): void
    {
        $this->dbName = $dbName;
    }


    public function getPort(): string
    {
        return $this->port;
    }


    public function setPort(string $port): void
    {
        $this->port = $port;
    }


    public function getHost(): string
    {
        return $this->host;
    }


    public function setHost(string $host): void
    {
        $this->host = $host;
    }


    public function getPassword(): string
    {
        return $this->password;
    }


    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


    public function getUser(): string
    {
        return $this->user;
    }


    public function setUser(string $user): void
    {
        $this->user = $user;
    }




    public function connect(){
        return pg_connect("host=".$this->host. " port=".$this->port. " dbname=".$this->dbName. " user=".$this->user. " password=".$this->password);
    }



}