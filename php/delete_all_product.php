<?php

require 'Classes/product.class.php' ;

 $del = new product;
 $eff = $del->deleteAll();
 
 header("location:../home.php");