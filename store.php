<?php
require 'classes/client.class.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$aa=new client;
$bb=$aa->addclient($name,$email,$phone);
header('location:admin.php');

 