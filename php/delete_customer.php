<?php

require 'Classes/employee.class.php' ;
 $id=$_GET['vid'];
 $del = new employee;
 $eff = $del->delete($id);
 
 header("location:../employee.php");