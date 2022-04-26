<?php

class database{
    
    private $host;
    private $user;
    private $bdname;
    private $port;
    private $pass;
    private $pdo;
    

    

    public function __construct($dbname = "blog",$host = "localhost",$user = "berthiertheo",$pass = "Helloworld45!",$port= "3306")
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->port = $port;
    }

    public function getPDO(){
        if($this->pdo === null){
            try{

                $source = "mysql:host=".$this->host.";"."dbname=".$this->dbname;
                $pdo = new PDO($source,$this->user,$this->pass,array(PDO::ATTR_PERSISTENT => false));
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }
            catch(PDOException $e) {
                die('Erreur : ' . $e->getMessage());
            }
            $this->pdo = $pdo;

        }
        return $pdo;
    }

    public function queryGet($q,$array=null){
        $req = $this->getPDO()->prepare($q);
        $req->execute($array);

        return $req;
    }
    public function querySet($q,$params=null){
        $req = $this->getPDO()->prepare($q);
        $req->execute($params);
    }
}