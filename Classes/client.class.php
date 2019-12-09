<?php
include 'dbConnect.class.php';
 
class client{
    private $cnx;


    public function __construct(){
        $db=new DataBase;
        $this->cnx= $db->connectDB();


    }

    public function updateClient($name,$email,$password,$adresse,$cid){
        try {
            $repp='UPDATE customer SET name=:param_name,email=:param_email,pwd=:param_password,adresse=:param_adresse where cid=:param_cid';
            $rep=$this->cnx->prepare($repp);
            $rep->bindParam(':param_name',$name);
            $rep->bindParam(':param_email',$email);
            $rep->bindParam(':param_password',$password);
            $rep->bindParam(':param_adresse',$adresse);
            $rep->bindParam(':param_cid',$cid);
            $rep->execute();
            return $rep; 
            
        }catch (Exception $e) {
            echo  $e->getMessage();
        }
    }
    public function add_new($name,$email,$password,$adresse,$phone)
    {
        try{
        
        $repp='INSERT INTO customer (name, email, pwd , adresse, phone) VALUES ( :param_name,:param_email,:param_password,:param_adresse,:param_phone);';
        $rep=$this->cnx->prepare($repp);
        $rep->bindParam(':param_name',$name);
        $rep->bindParam(':param_email',$email);
        $rep->bindParam(':param_password',$password);
        $rep->bindParam(':param_adresse',$adresse);
        $rep->bindParam(':param_phone',$phone);
        $rep->execute();
     return $rep;
    }catch (Exception $e) {
        echo  $e->getMessage();
         }
    }

}