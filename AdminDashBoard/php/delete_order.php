<?php

require 'Classes/order.class.php' ;
 $id=$_GET['oid'];
 $del = new order;
 $eff = $del->deleteorder($id);
 
 header("location:../order.php");