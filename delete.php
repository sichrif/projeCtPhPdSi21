<?php
    require "classes/product.class.php";
    require "classes/cart.class.php";
    $student = new cart();
    $student = $student->deleteCart($_GET['id']);
    header("location: shop_cart.php")
?>