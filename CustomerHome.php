<?php

    session_start();
    if(empty($_SESSION)){
        header("Location: index.php");
    }

    require "classes/Functions.class.php";
    require "classes/product.class.php";
    require "classes/cart.class.php";
    
    $product = new Product();
    $productList = $product->readAllProducts();

    $cart = new Cart();
    $cartList = $cart->getAllInCart($_SESSION["id"]);
    $price=0;
    while($row = $cartList->fetch()){
        $productInfo = $product->getProduct($row["pid"]);
        $productInfo = $productInfo->fetch();
        $price = $price + $productInfo["price"];    
    }
    $cartList = $cart->getAllInCart($_SESSION["id"]);
    require "template/CustomerHome.phtml";



