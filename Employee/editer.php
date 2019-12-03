<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
 include 'classes/product.class.php' ; 
 $DB = new BaseDonne;
 $base = $DB->connect();          
 $rep=$base->prepare('SELECT * FROM products WHERE pid =:param_id');
 $rep->bindParam(':param_id', $_GET['pid']); 
 $rep->execute();  
 $data = $rep->fetch();
?>

<div class="container">
<div class="jumbotron">
<h3>Modify</h3>
</div>
<form method="POST" action="update.php">
<div class="form-group">
    <input type="number" class="form-control" name="pid" value="<?php echo $data['pid']?>" hidden>  
  </div> 
  <div class="form-group row">
    <div class="col-xs-4">
    <label>Name :</label>
    <input type="text" class="form-control" name="name" value="<?php echo $data['name']?>">
    </div>&nbsp; &nbsp;
    <div class="col-xs-4">
    <label>Description :</label>
    <input type="text" class="form-control" name="description" value="<?php echo $data['description']?>">
    </div>
</div>
  <div class="form-group row">
    <div class="col-xs-4">
    <label>Price</label>
    <input type="text" class="form-control" name="price" value="<?php echo $data['price']?>">
    </div>&nbsp; &nbsp;
    <div class="col-xs-4">
    <label>Set image</label>
    <input type="text" class="form-control" name="file" value="<?php echo $data['file']?>">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Modify</button>
  <button type="reset" class="btn  btn-secondary">Cancel</button>
  <br>
  <a href="home.php">
        <input type="button"  type="button" class="btn btn-outline-primary" value="Home" />
    </a>
</form>
</div>
</body>
</html>
