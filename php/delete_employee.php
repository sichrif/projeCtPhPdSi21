<?php

require 'Classes/employee.class.php' ;
 $id=$_GET['eid'];
 $del = new employee;
 $eff = $del->delete($id);
 
 header("location:../employee.php");