<?php

class UserClass
{
    private $dbconn;

    public function __construct()
    {
        if (!isset($this->dbconn) || !($this->dbconn instanceOf DatabaseConnection)) {
            $host = 'localhost';
            $user = 'username';
            $pass = 'password';
            $this->dbconn = new DatabaseConnection($host,$user,$pass);
        }
    }

    public function getUserList()
    {
        $lista = $this->dbconn->query('select name from user order by name');
        return $lista;
    }
}
