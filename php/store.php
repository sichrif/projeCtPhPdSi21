<?php
 require 'Classes/product.class.php' ;
if(isset($_POST['done'])){


 $name=$_POST['name'];
 $description=$_POST['description'] ;
 $price=$_POST['price'];
 $file=$_FILES['file'];
 var_dump($_FILES);
 $done=$_POST['done'];
 $add = new product;
 $ajout = $add->add_new($name,$description,$price,$file);
 header("Location:../product.php");
}