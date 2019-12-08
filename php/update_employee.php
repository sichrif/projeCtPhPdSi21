<?php
require 'classes/employee.class.php';
$nom=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$id=$_POST['id'];
$g=new employee;
$gg=$g->update($nom,$email,$phone,$id);
//header('location:../employee.php');
