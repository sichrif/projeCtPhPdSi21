<?php

require 'dbconnect.class.php';
 
class counte{
    private $cnx;


    public function __construct(){
        $db=new BaseDonne;
        $this->cnx= $db->connect();


    }
    public function num_message(){
        try{
            $req='SELECT * FROM `message`';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
    }
    }
    public function num_product(){
        try{
            $req='SELECT * FROM product';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
    }
}
public function num_vehicule(){
    try{
        $req='SELECT * FROM vehicle';
        $result = $this->cnx->prepare($req);
        $result->execute();
        return $result;

    } catch (PDOException $e) {
        echo $e->getMessage();
}
}
public function num_customer(){
    try{
        $req='SELECT * FROM customer';
        $result = $this->cnx->prepare($req);
        $result->execute();
        return $result;

    } catch (PDOException $e) {
        echo $e->getMessage();
}
}
public function num_order(){
    try{
        $req='SELECT * FROM order';
        $result = $this->cnx->prepare($req);
        $result->execute();
        return $result;

    } catch (PDOException $e) {
        echo $e->getMessage();
}
}
public function num_employee(){
    try{
        $req='SELECT * FROM employee';
        $result = $this->cnx->prepare($req);
        $result->execute();
        return $result;

    } catch (PDOException $e) {
        echo $e->getMessage();
}
}
}

?>