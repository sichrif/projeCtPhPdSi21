<?php

    $cart = new cart();
    $cartList = $cart->getAllInCart($_SESSION["id"]);
    $product = new Product();
    $productInfo = $product->getProduct(4);
    $productInfo = $productInfo->fetch();
    var_dump($cartList);
    require "template/nav.phtml";
