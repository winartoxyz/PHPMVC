<?php
class Mahasiswa_model{
    private $dbh; //database handler
    private $stmt;

    public function __construct(){
        //database source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try{
            $this->dbh = new PDO($dsn, 'root', 'P@ssw0rd');
        }catch(PDOException $e){
            die($e->getMesssage());
        }

    }

    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
}