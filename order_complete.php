<?php
    session_start();
        if(empty($_SESSION)){
            header("Location: index.php");
    }

    require "classes/product.class.php";
    require "classes/cart.class.php";
    require "classes/order.class.php";

    $order = new Order;
    $order->addOrders();
     require "template/order_complete.phtml";
?>