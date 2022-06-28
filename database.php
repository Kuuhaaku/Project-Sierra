<?php

class database
{
    public $hostname = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "auth";

    public $db;

    function connect()
    {
        $this->db = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);

        if (!$this->db) {
            die("Database Connection Failed: " . mysqli_connect_error());
        }
        helper::debug("Database Connection Successfull");                        

    }

    function disconnect()
    {
        mysqli_close($this->db);
    }
}