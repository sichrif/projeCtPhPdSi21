<?php
require"dbconnexion.php";
class Product{
    private $cnx;
    public function __construct(){
        $db=new BaseDonne();
        $this->cnx= $db->connect();
    }
    public function readAllimage(){
        try {
            $req='SELECT * FROM product';
            $resultat=$this->cnx->Prepare ($req);
            $resultat->execute();
            return $resultat;
        } catch (PDOException $th) {
            echo $th->getMessage();
        
    }
        }
        public function addimage(){
            try{
                if(isset($_POST['but_upload'])){
                    $name = $_FILES['file']['name'];
                    $target_dir = "img/";
                    $target_file = $target_dir . basename($_FILES["file"]["name"]);
            
                    // Select file type
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
                    // Valid file extensions
                    $extensions_arr = array("jpg","jpeg","png","gif");
            
                    // Check extension
                    if( in_array($imageFileType,$extensions_arr) ){
                        
                        // Convert to base64 
                        $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
                        $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
            
                        // Insert record
                        $categorie=$_POST['categorie'];
                        $description=$_POST['description'];
                        $nom=$_POST['name'];
                        $price=$_POST['price'];


                        
                        $req="INSERT INTO `product`( `name`, `description`, `price`, `file`, `categorie`) 
                        VALUES ('".$nom."','".$description."','".$price."','".$name."','".$categorie."')";
            $l=$this->cnx->Prepare($req);
            
            $l->execute();
            move_uploaded_file($_FILES['file']['tmp_name'],'img/'.$name);
                    }
                }
            }catch(PDOException $th){
                echo $th->getMessage();
            }
    
    
        }
}
?>