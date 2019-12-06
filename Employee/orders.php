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
        <a class="nav-link" href="home.php">Manage the products <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    
  </div>
</nav>








<div class="jumbotron"  >
    <h1><i><u>Orders</u></i></h1>
</div>
<div class="container">

<table class="table">
<thead class="thead-dark">
 <tr>
    
    <td><strong>  Order Number</strong></td>
    <td><strong>Product ID</strong></td>
    <td><strong>Customer ID</strong></td>
    <td><strong>Ordered Quantity</strong></td>
    <td><strong>Order Date</strong></td>
    <td><strong>Available Quantity</strong></td>
    <td><strong>Delivery status</strong></td>
    <td><strong>Vehicle ID</strong></td>
    <td><strong>Generate</strong></td>
   </tr>
</thead>
   <?php 
   include 'classes/product.class.php';
   $product = new product;
   $listOrders = $product->readAllOrders();
   while ($data = $listOrders->fetch()) 
      { echo ' <tbody> ';
        echo '<tr>';
        
        echo '<td>'.$data['oid '].'</td>';
        echo '<td>'.$data['pid'].'</td>';
        echo '<td>'.$data['Cid'].'</td>';
        echo '<td>'.$data['Quantity_product'].'</td>';
        echo '<td>'.$data['Odate '].'</td>';
        echo '<td>'.$data['Quantity'].'</td>';
        echo '<td>'.$data['Delivery'].'</td>';
        echo '<td>'.$data['Vehicle'].'</td>';
        
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