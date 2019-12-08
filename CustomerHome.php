<?php

    session_start();
    if(empty($_SESSION)){
        header("Location: index.php");
    }

    require "classes/Functions.class.php";
    require "classes/product.class.php";
    
    $product = new Product();
    $productList = $product->readAllProducts();
    require "template/CustomerHome.phtml";



