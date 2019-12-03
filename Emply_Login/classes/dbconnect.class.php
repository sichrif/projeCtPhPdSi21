<?php
class BasesDonnees{
    private $dbhost='localhost';
    private $dbname='restaurant';
    private $dbuser='root';
    private $dbpwd='';
    public $conex=null;
    public function connect(){
        try {
             $this->conex= new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname,$this->dbuser,$this->dbpwd);
             $this->conex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
           echo $e->getMessage();
        }
        return $this->conex;
    }
}
?>