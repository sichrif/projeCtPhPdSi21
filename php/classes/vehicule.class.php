<?php

require 'dbconnect.class.php';
 
class vehicule{
    private $cnx;


    public function __construct(){
        $db=new BaseDonne;
        $this->cnx= $db->connect();


    }
    
    public function readAllVehicule(){
        try{
            $req='SELECT * FROM vehicle';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
    }
}
public function add_new_vehicule($statu,$vnumber)
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
}

public function delete($id){
    try {
        $repp='DELETE FROM vehicle WHERE vid =:param_pid';
        $rep=$this->cnx->prepare($repp);
        $rep->bindParam(':param_pid',$_GET['vid']);
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
}
*/
public function update($vid,$statu,$v_number){
    try {
        $rep='UPDATE `vehicle` SET 
        `vid`=:vid,`status`=:statu,`vehicle_number`=:v_number WHERE `vid`=:vid';
        $rep=$this->cnx->prepare($rep);
        $rep->bindParam(':vid',$vid);
        $rep->bindParam(':statu',$statu);
        $rep->bindParam(':v_number',$v_number);
        $rep->execute();
        return $rep;
    
    }catch (Exception $e) {
        echo  $e->getMessage();
         }
}
}

?>