<?php
require 'classes/vehicule.class.php';
$vid=$_POST['vid'];
$v_number=$_POST['v_number'];
$statu=$_POST['statu'];
$g=new vehicule;
$gg=$g->update($vid,$statu,$v_number);
header('location:../vehicle.php');
