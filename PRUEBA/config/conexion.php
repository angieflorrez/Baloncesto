<?php
class conexion{
    private $dbUser;
    private $dbPwd;
    private $dbHost;
    private $dbName;
    private $conn;


    public function _construct($dbuser,$dbpwd,$dbhost,$dbname){
        $this->dbUser=$dbuser;
        $this->dbPwd=$dbpwd;
        $this->dbHost=$dbhost;
        $this->dbName=$dbname;
    }

    public function conectarse(){
        try{

            $dsn = "mysql:host={$this->dbHost};dbname={$this->dbName};charset=utf8mb4";
            $this->conn = new PDO($dsn,  $this->dbUser, $this->dbPwd);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;

        }catch (PDOException $e){
            echo "Error de conexion: " . $e->getMessage();
            exit;
        }
    }
    public function desconectar(){
         $this->conn = null;
    }

}