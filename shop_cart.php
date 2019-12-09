<?php
    session_start();
    if(empty($_SESSION)){
        header("Location: index.php");
    }

    require "classes/product.class.php";
    require "classes/cart.class.php";

    $cart = new cart();
    $cartList = $cart->getAllInCart($_SESSION["id"]);
    $product = new Product();
    $productInfo = $product->getProduct(4);
    $productInfo = $productInfo->fetch();

    require "template/shop_cart.phtml";
?>
