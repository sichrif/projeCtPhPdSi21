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
  <link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
    <title>Document</title>
</head>

<body>



<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" >
  <a class="navbar-brand" href="" >FeedMe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item active" style="witdh:150px">
        <a class="nav-link " href="orders.php">Check Orders <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="#">Vehicle <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="create.php">Add a product <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="delete_all.php">Delete all products <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    
  </div>
</nav>








<div class="jumbotron"  >
    <h1><i><u>Available Products</u></i></h1>
</div>
<div class="container">

<table class="table">
<thead class="thead-dark" style="color:white;background-color:#f8a978;">
 <tr>
    
    <td><strong>  Name</strong></td>
    <td style="width:300px"><strong>Description</strong></td>
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
      { echo ' <tbody style="color:black;background-color:#49beb7;"> ';
        echo '<tr>';
        
        echo '<td><b>'.$data['name'].'</b></td>';
        echo '<td style="width:300px">'.$data['description'].'</td>';
        echo '<td>'.$data['price'].'</td>';
        echo '<td> <img style="width:250px;height:200px" src="' .$data['file'].'"/></td>';
    
       
        echo '<td><a href="editer.php?pid='.$data['pid'].'">
        <input type="button"  type="button" class="btn black-background" value="Modify" /></a>        ';  
        echo '<a href="delete.php?pid='.$data['pid'].'">
        <button class="btn"><i class="fa fa-trash"></i> Trash</button></a></td>';  
        echo '</tr></tbody>';

      }


?>

</table>
</div>
</body>
</html>