<?php
require 'Classes/product.class.php' ;
$quantity=$_POST['quantity'];
 $vehicle=$_POST['vehicle'] ;
 $cid=$_POST['cid'];
 $pid=$_POST['pid'];
$oid=$_POST['oid'];
$up = new product;
$update = $up->update($quantity,$vehicle,$cid,$pid,$oid);
header("location:../order.php");
