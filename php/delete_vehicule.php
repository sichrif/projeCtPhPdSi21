<?php

require 'Classes/vehicule.class.php' ;
 $id=$_GET['vid'];
 $del = new vehicule;
 $eff = $del->delete($id);
 
 header("location:../vehicle.php");