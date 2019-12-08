<?php

require 'dbconnect.class.php';
 
class customer{
    private $cnx;


    public function __construct(){
        $db=new BaseDonne;
        $this->cnx= $db->connect();


    }

    public function readAllCustomer(){
        try{
            $req='SELECT * FROM customer';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
    }
}
/*public function add_new_vehicule($statu,$vnumber)
{
        try{
            if(isset($_POST['done'])){   
                $repp='INSERT INTO `vehicle`(`vid`, `status`, `vehicle_number`) 
                VALUES (:vid,:statu,:vmumber)';              
    $rep=$this->cnx->prepare($repp);
    $rep->bindParam(':vid',$vid);
    $rep->bindParam(':statu',$statu);
    $rep->bindParam(':vmumber',$vnumber);
    $rep->execute();

 return $rep;
              }
}catch (Exception $e) {
    echo  $e->getMessage();
     }
}*/

public function delete(){
    try {
        $repp='DELETE FROM customer WHERE cid =:param_pid';
        $rep=$this->cnx->prepare($repp);
        $rep->bindParam(':param_pid',$_GET['cid']);
        $rep->execute();
        return $rep;
    
    }catch (Exception $e) {
        echo  $e->getMessage();
         }
}

/*public function deleteAll(){
    try{
        $repp='DELETE FROM product ';
        $rep=$this->cnx->prepare($repp);
        $rep->execute();
        return $rep;
    }catch (Exception $e) {
        echo  $e->getMessage();
         }
}*/

public function update($cid,$name,$phone,$adressse,$email){
    try {
        $rep='UPDATE `customer` SET 
        `cid`=:cid,`name`=:name,`email`=:email,`phone`=:phone,`adresse`=:adressse 
        WHERE 1';
        $rep=$this->cnx->prepare($rep);
        $rep->bindParam(':cid',$cid);
        $rep->bindParam(':name',$name);
        $rep->bindParam(':email',$phone);
        $rep->bindParam(':phone',$adressse);
        $rep->bindParam(':adresse',$email);

        $rep->execute();
        return $rep;
    
    }catch (Exception $e) {
        echo  $e->getMessage();
         }
}
}

?>