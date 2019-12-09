<?php


require "classes/product.class.php";
require "classes/cart.class.php";
session_start();
if(empty($_SESSION)){
    header("Location: index.php");
}



    require "template/order_complete.phtml";
?>