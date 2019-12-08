<?php
require 'classes/customer.class.php';
$cid=$_POST['id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$adressse=$_POST['adressse'];
$email=$_POST['email'];
$g=new customer;
$gg=$g->update($cid,$name,$phone,$adressse,$email);
header('location:../customer.php');
