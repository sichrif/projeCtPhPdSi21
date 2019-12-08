<?php

    session_start();
        if(empty($_SESSION)){
            header("Location: index.php");
        }

    require "classes/Functions.class.php";
    require "classes/product.class.php";
    require "classes/cart.class.php";

    $product = new Product;
    $productInfo = $product->getProduct($_GET["pid"]);
    $productInfo = $productInfo->fetch();

    $cart = new cart;
    if(isset($_POST["cartAdd"])){
        $cart->addCart($_SESSION["id"] , $productInfo["pid"] , $_POST["quantity"] , "Not delivered");
    }
    
    require "template/shop_single.phtml";