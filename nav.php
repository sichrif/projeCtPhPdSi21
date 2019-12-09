<?php

    $product = new Product();
    $productList = $product->readAllProducts();

    $cart = new Cart();
    $cartList = $cart->getAllInCart($_SESSION["id"]);
    $price=0;
    while($row = $cartList->fetch()){
        $productInfo = $product->getProduct($row["pid"]);
        $productInfo = $productInfo->fetch();
        $price = $price + ($row['qty']*$productInfo['price']);    
    }
    $cartList = $cart->getAllInCart($_SESSION["id"]);
    require "template/nav.phtml";
?>
