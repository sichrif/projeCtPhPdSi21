<?php

    class cart {

    private $conn;
    private $db;

    public function __construct(){
        
        $db = new DataBase();
        $this->conn = $db->connectDB();

    }

    public function getAllInCart($cid){
        try{
            $req='SELECT * FROM cart WHERE cid = ?';
            $result = $this->conn->prepare($req);
            $result->execute([$cid]);
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function addCart($cid ,$pid , $qty ,$statu){
        try{
            $req="INSERT INTO `cart` (`cid`, `pid`, `qty`, `statu`) VALUES (?, ?, ?, ?);";
            $result = $this->conn->prepare($req);
            $result->execute([$cid ,$pid , $qty ,$statu]);
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    
}

?>