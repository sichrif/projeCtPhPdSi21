<?php
 require 'Classes/product.class.php' ;
 $name=$_POST['name'];
 $description=$_POST['description'] ;
 $price=$_POST['price'];
 $file=$_POST['file'];
 $add = new product;
 $ajout = $add->add_new($name,$description,$price,$file);
 header("location:home.php");