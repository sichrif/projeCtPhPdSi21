<?php

require 'Classes/product.class.php' ;
 $id=$_GET['pid'];
 $del = new product;
 $eff = $del->delete($pid);
 
 header("location:../product.php");