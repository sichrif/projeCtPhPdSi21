<?php
require 'classes/client.class.php';
$nom=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$id=$_POST['eid'];
$g=new client;
$gg=$g->update($nom,$email,$phone,$id);
header('location:admin.php');
