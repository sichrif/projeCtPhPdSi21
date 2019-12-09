<?php

require 'dbconnect.class.php';
 
class product{
    private $cnx;


    public function __construct(){
        $db=new BaseDonne;
        $this->cnx= $db->connect();


    }
    
   

    public function readAllProducts(){
        try{
            $req='SELECT * FROM product';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
    }
}
public function add_new($name,$description,$price,$file)
{
        try{
            if(isset($_POST['done'])){
            
                $target_dir = "../image/";
                $target_file = $target_dir . basename($file['name']);
        
             
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        
                $extensions_arr = array("jpg","jpeg","png","gif");
        
              
                if( in_array($imageFileType,$extensions_arr) ){                    
    $repp='INSERT INTO product(name, description, price , file) 
    VALUES ( :param_name,:param_description,:param_price,:param_file);';
    $rep=$this->cnx->prepare($repp);
    $rep->bindParam(':param_name',$name);
    $rep->bindParam(':param_description',$description);
    $rep->bindParam(':param_price',$price);
    $rep->bindParam(':param_file',$file['name']);
    $rep->execute();
    move_uploaded_file($file['tmp_name'],'../image/'.$file['name']);

 return $rep;
              }}
}catch (Exception $e) {
    echo  $e->getMessage();
     }
}
public function delete($id){
    try {
        $repp='DELETE FROM product WHERE pid =:param_pid';
        $rep=$this->cnx->prepare($repp);
        $rep->bindParam(':param_pid',$_GET['pid']);
        $rep->execute();
        return $rep;
    
    }catch (Exception $e) {
        echo  $e->getMessage();
         }
}

public function deleteAll(){
    try{
        $repp='DELETE FROM product ';
        $rep=$this->cnx->prepare($repp);
        $rep->execute();
        return $rep;
    }catch (Exception $e) {
        echo  $e->getMessage();
         }
}

public function update($name,$description,$price,$file,$pid){
    try {
        $repp='UPDATE product SET name=:param_name,description=:param_description,price=:param_price,file=:param_file where pid=:param_pid';
        $rep=$this->cnx->prepare($repp);
        $rep->bindParam(':param_name',$name);
        $rep->bindParam(':param_description',$description);
        $rep->bindParam(':param_price',$price);
        $rep->bindParam(':param_file',$file);
        $rep->bindParam(':param_pid',$pid);
        $rep->execute();
        return $rep;
    
    }catch (Exception $e) {
        echo  $e->getMessage();
         }
}
}

?>