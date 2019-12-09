<?php

require 'Classes/customer.class.php' ;
 $del = new customer;
 $eff = $del->delete();
 
// header("location:../customer.php");