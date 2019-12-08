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
            $req='SELECT * FROM product WHERE cid = ?';
            $result = $this->cnx->prepare($req);
            $result->execute([$cid]);
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
    }
}

?>