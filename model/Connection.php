<?php
class Connection {
    protected $con;
    private $host = "localhost";
    private $dbname = "oop";
    private $username = "root";
    private $password = "";


    function __construct()
    {
        try {
            $this->con = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=UTF8;",$this->username,$this->password);

        }
        catch(PDOException $e) {
            die("connection error ". $e->getMessage());
            
        }

        
    }
    public function checkConnection()
    {
        
    }
}

?>