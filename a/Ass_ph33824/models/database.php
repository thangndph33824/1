<?php
class Database
{
    public $conn;
    public function __construct()
    {

        $servername = DB_HOST;
        $database = DB_NAME;
        $username = DB_USER;
        $password = DB_PASS;
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }
    public function __destruct()
    {
        $this->conn = null;
    }
    public function getAll($sql)
    {
        $stsm = $this->conn->prepare($sql);
        $stsm->execute();
        $result = $stsm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getOne($sql)
    {
        $stsm = $this->conn->prepare($sql);
        $stsm->execute();
        $result = $stsm->fetchAll(PDO::FETCH_ASSOC);
        return $result[0];
    }
    public function exec($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}