<?php

require 'dbconnect.class.php';
 
class order{
    private $cnx;


    public function __construct(){
        $db=new BaseDonne;
        $this->cnx= $db->connect();


    }

    public function readAllorder(){
        try{
            $req='SELECT A.oid,B.name,A.cid,A.odate,A.quantity,A.vehicle FROM ordere A,product B where B.pid=A.pid';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
    }
}
public function updateOrder($quantity,$vehicle,$cid,$pid,$oid){
    try {
        $repp='UPDATE ordere SET 
        quantity=:param_name,
        vehicle=:param_description,
        cid=:param_price,
        pid=:param_pid,
        oid=:param_file,
         where pid=:param_pid';
        $rep=$this->cnx->prepare($repp);
        $rep->bindParam(':param_name',$quantity);
        $rep->bindParam(':param_description',$vehicle);
        $rep->bindParam(':param_price',$cid);
        $rep->bindParam(':param_file',$file);
        $rep->bindParam(':param_pid',$pid);
        $rep->bindParam(':param_pid',$oid);
        $rep->execute();
        return $rep;
    
    }catch (Exception $e) {
        echo  $e->getMessage();
         }
}

    public function deleteorder($id){
        try {
            $repp='DELETE FROM ordere WHERE `oid` =:param_pid';
            $rep=$this->cnx->prepare($repp);
            $rep->bindParam(':param_pid',$_GET['oid']);
            $rep->execute();
            return $rep;
        
        }catch (Exception $e) {
            echo  $e->getMessage();
             }
    }
}
?>