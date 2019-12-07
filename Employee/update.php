<?php
require 'Classes/product.class.php' ;
$name=$_POST['name'];
 $description=$_POST['description'] ;
 $price=$_POST['price'];
 $file=$_POST['file'];
$pid=$_POST['pid'];
$up = new product;
$update = $up->update($name,$description,$price,$file,$pid);
header("location:home.php");
