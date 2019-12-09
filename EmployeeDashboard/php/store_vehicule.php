<?php
 include 'classes/vehicule.class.php';
$vnumber=$_POST['v_number'];
$status=$_POST['statu'];

$aa=new vehicule;
$bb=$aa->add_new_vehicule($vnumber,$status);
header('location:../vehicle.php');