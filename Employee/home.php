<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<style>
body{
    background-color:#dfddc7;
}
    #tete{
        background-image:url('table-on-wooden-plank-326279.jpg');
        background-repeat: no-repeat;
  
  background-size: cover;
    }
    .black-background {background-color:#293a80;}
.white {color:#ffffff;}
</style>
<body>

<div class="container">
<div id="tete" class="jumbotron"  style="color:#f39422;text-align:left;height:250px;">
    <h1><i><u>Available Products</u></i></h1>
</div>

<a class="btn black-background white" href="create.php"> <span class="fa fa-plus "></span>&nbsp&nbspAdd Product</a>

<table class="table">
<thead class="thead-dark" style="color:#29a19c;background-color:#393e46;">
 <tr>
    <td><strong>NumPro</strong></td>
    <td><strong>Name</strong></td>
    <td><strong>Description</strong></td>
    <td><strong>Price</strong></td>
    <td><strong>Image</strong></td>
    <td><strong>Generate</strong></td>
   </tr>
</thead>
   <?php 
   include 'classes/product.class.php';
   $product = new product;
   $listProduct = $product->readAllProducts();
   while ($data = $listProduct->fetch()) 
      { echo ' <tbody style="color:white;background-color:#719192;"> ';
        echo '<tr>';
        echo '<td>'.$data['pid'].'</td>';
        echo '<td>'.$data['name'].'</td>';
        echo '<td>'.$data['description'].'</td>';
        echo '<td>'.$data['price'].'</td>';
        echo '<td> <img style="width:150px;height:150px" src="' .$data['file'].'"/></td>';
    
       
        echo '<td><a href="editer.php?pid='.$data['pid'].'">
        <input type="button"  type="button" class="btn black-background white" value="Modify" /></a>        ';  
        echo '<a href="delete.php?pid='.$data['pid'].'">
        <button class="btn"><i class="fa fa-trash"></i> Trash</button></a></td>';  
        echo '</tr></tbody>';

      }


?>

</table>

       


          
      


  
  
</table>

</div>
</body>
</html>