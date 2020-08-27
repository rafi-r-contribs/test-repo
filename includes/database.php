<?php
class Database{
    // specify your own database credentials
    private $host = "127.0.0.1"; //your host name
    private $db_name = "1i2h7_neo_kmsdb";   //your database name
    private $username = "1i2h7_dev";        //username of database server
    private $password = "KMS@dev1";         //password of database server
    public $conn;
    // get the database connection
    public function __construct(){
        try{
            $db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $db->exec("set names utf8");
            $this->conn = $db;
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
    }
}
?>