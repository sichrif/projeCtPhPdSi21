<?php
class BaseDonne{

    public $cnx=null;
    private $dbhost='localhost';
    private $dbname='projet';
    private $dbuser='root';
    private $pass='';

     public function connect()
     {
         try{
             $this->cnx=new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname,$this->dbuser,$this->pass);
         
         }catch (PDOException $e) {
            echo $e->getMessage();
        
     }
     return $this->cnx;
    }
}
?>