<?php
 include 'classes/employee.class.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$aa=new employee;
$bb=$aa->addemployee($name,$email,$phone,$password);
//header('location:admin.php');

 