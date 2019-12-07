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







<div class="men col-lg-10 mx-auto col-12 text-center mb-3">
            <h1  style="font-family:monotype corsiva">Our Menu</h1>
            <p class="lead">Begin with a selection from our award winning beverage menu or choose a wine from our extensive wine list. Our wine list features over 100 different vintages and has received the chamber of commerce award of excellence.</p>
        </div>


   <?php 
   include 'classes/product.class.php';
   $product = new product;
   $listProduct = $product->readAllProducts();
   while ($data = $listProduct->fetch()) 
      { 
        
    echo '<div class="card  mx-auto">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="'.$data['file'].'" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title">'.$data['name'].'</h3>
        <h5 class="card-text">'.$data['price'].'</h5>
        <p class="card-text text-muted">'.$data['description'].'</p>
        <br><br>
        <a href="#" class="btn black-background"><span class="fa fa-shopping-cart"></span> &nbsp&nbsp Add to cart</a>
      </div>
    </div>
  </div>
</div> <br>  ';

      }


?>

</table>
</div>
</body>
</html>