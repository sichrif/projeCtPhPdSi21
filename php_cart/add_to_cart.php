<?php
include "dbconnect.php"
class ClassName extends AnotherClass
{
	private $cnx;
	public function __construct()
	{
		$db=new BaseDonne();
		$this->cnx=$db->connect();
	}
	public function readProducts($id){
        try{
            $req='SELECT * FROM product WHERE id=.$id.';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
    }
    public function readCustomer($id){
    	try {
                $req='SELECT * FROM product WHERE id=:id';
                $resultat=$this->cnx->Prepare ($req);
                $resultat->execute();
                return $resultat;
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }
        public function readallvehiculeLibre(){
        	try{
        		$req='SELECT * FROM `vehicle` WHERE
        		 `status`="libre" ';
        		$resultat=$this->cnx->Prepare ($req);
                $resultat->execute();
                return $resultat;
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }

        public function changevehiculestatus($id){
        	try{
            $req=("UPDATE `vehicle` SET `status` =:status WHERE `vid` =:id");
            $l=$this->cnx->Prepare($req);
            $l->bindParam(':status', 1);
            $l->bindParam(':vid', $id);
            $le=$l->execute();
            //var_dump($l);
        }catch(PDOException $th){
            echo $th->getMessage();
        }
        }
        }
    public function addcart(){
    	try{
    	$prod=$this->readProducts();
    	$Customer=$this->readCustomer();
    	$pid=$prod['pid'];
    	$cid=$Customer['cid'];
    	$qty=$_POST['quantity'];
    	$req='INSERT INTO `cart`(`cid`, `pid`, `qty`)
    	 VALUES (:cid,:pid,:quantity)';
    	 $l=$this->cnx->Prepare($req);
        $l->bindParam(':cid', $cid);        
        $l->bindParam(':pid', $pid);
        $l->bindParam(':quantity', $qty);
        $l->execute();
        }catch(PDOException $th){
            echo $th->getMessage();
        }
        }
        public function removecart($cid){
        	try {
                $req=("DELETE FROM cart WHERE cid=:cid");
                $res=$this->cnx->prepare($req);
                $res->bindparam(':cid',$cid);
                $res->execute();
            } catch (PDOException $th) {
                echo $th->getMessage();
                
            }

        }
          public function removeoneorder($id){
        	try {
                $req=("DELETE FROM cart WHERE id=:id");
                $res=$this->cnx->prepare($req);
                $res->bindparam(':id',$id);
                $res->execute();
            } catch (PDOException $th) {
                echo $th->getMessage();
                
            }

        }
        public function readallCart(){
        	 try {
            $req='SELECT * FROM cart';
            $resultat=$this->cnx->Prepare ($req);
            $resultat->execute();
            return $resultat;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
        }
}
?>