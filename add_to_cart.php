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
    public function addorder(){
    	try{
    	$prod=$this->readProducts();
    	$Customer=$this->readCustomer();
    	$vehicule=$this->readallvehiculeLibre();
    	$pid=$prod['pid'];
    	$cid=$Customer['cid'];
    	$vid=$vehicule['vid'];
    	$quantity=$_POST['quantity'];
    	$delivery=$_POST['Delivery'];
    	$req='INSERT INTO `ordere` (`pid`, `Cid`, `Quantity_product`, `Odate`, `Quantity`, `Delivery`, `Vehicle`)
    	 VALUES (:pid,:cid,:quantity,now(),:quantity,0,:vid)';
    	 $l=$this->cnx->Prepare($req);
        
        $l->bindParam(':pid', $pid);
        $l->bindParam(':cid', $cid);
        $l->bindParam(':quantity', $quantity);
        $l->bindParam(':quantity', $quantity);
        $l->bindParam(':vid', $vid);   
        $l->execute();
        $this->changevehiculestatus($vid);
        }catch(PDOException $th){
            echo $th->getMessage();
        }
        }
        public function removeOrder($id){
        	try {
                $req=("DELETE FROM ordere WHERE id=:id");
                $res=$this->cnx->prepare($req);
                $res->bindparam(':id',$id);
                $res->execute();
            } catch (PDOException $th) {
                echo $th->getMessage();
                
            }

        }
        public function readallOrder(){
        	 try {
            $req='SELECT * FROM ordere';
            $resultat=$this->cnx->Prepare ($req);
            $resultat->execute();
            return $resultat;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
        }
}
?>