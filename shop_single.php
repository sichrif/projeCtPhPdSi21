<?php

    session_start();
        if(empty($_SESSION)){
            header("Location: index.php");
        }

    require "classes/Functions.class.php";
    require "classes/product.class.php";

    $product = new Product();
    $productInfo = $product->getProduct($_GET["pid"]);
    $productInfo = $productInfo->fetch();
    require "template/shop_single.phtml";