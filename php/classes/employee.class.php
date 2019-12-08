<?php
 require 'dbconnection.class.php';

class employee
{
    private $cnnx;

    public function __construct()
    {
        $db=new dbconnection;
        $this->cnnx=$db->connect();
    } 

    public function delete($id)
    {
        try{
        $reponse=$this->cnnx->prepare('DELETE  FROM employee WHERE eid =:param_id');
        $reponse->bindParam(':param_id',$id);
        $reponse->execute();
        return $reponse;
    }catch (Exception $e) {
        echo  $e->getMessage();
        }
        }








    public function update($nom,$email,$phone,$id)
    {
        try{
            $reponse=$this->cnnx->prepare(' UPDATE `employee` SET
             `eid`=:param_id,`name`=:param_firstname,`phone`=:param_phone,`email`=:param_email
             WHERE eid=:param_id');
           /* $reponse=$this->cnnx->prepare('UPDATE employee 
            SET name=:param_firstname,phone=:param_phone,email=:param_email 
            where eid=:param_id');*/
            $reponse->bindParam(':param_firstname',$nom);
            $reponse->bindParam(':param_phone',$phone);
            $reponse->bindParam(':param_email',$email);
            $reponse->bindParam(':param_id',$id);
            $reponse->execute(); 
            return $reponse;
            
        }catch (Exception $e) {
            echo  $e->getMessage();
             }
    }
    public function addemployee($firstname,$email,$phone,$password)
    {
        try{
            $results=$this->cnnx->prepare('INSERT INTO employee (name,phone,email,password)  
            VALUES (:clt_nom,:clt_email,:clt_phone,:password);');
            $results->bindParam(":clt_nom",$firstname);
            $results->bindParam(":clt_email",$email);
            $results->bindParam(":clt_phone",$phone);
            $results->bindParam(":password",$password);

            $results->execute();
            return $results;
            
        }catch (Exception $e) {
            echo  $e->getMessage();
             }
    }

   public function readAllClients()
   {
    try{
        $req= 'SELECT * FROM employee';
        $result=$this->cnnx->prepare($req);
        $result->execute();
        return $result;
    }catch (Exception $e) {
       echo  $e->getMessage();
        }

   }

}