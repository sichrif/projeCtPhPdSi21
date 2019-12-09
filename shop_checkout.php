<?php



session_start();
if(empty($_SESSION)){
    header("Location: index.php");
}

require "classes/product.class.php";
require "classes/cart.class.php";

    require "template/shop_checkout.phtml";
?>