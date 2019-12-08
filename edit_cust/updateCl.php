<?php
require 'Classes/client.class.php' ;
$name=$_POST['name'];
 $email=$_POST['email'] ;
 $password=$_POST['password'];
 $phone=$_POST['phone'];
 $adresse=$_POST['adresse'];
$cid=$_POST['cid'];
$up = new client;
$update = $up->updateClient($name,$email,$password,$adresse,$cid);
header("location:shop_single.php");


