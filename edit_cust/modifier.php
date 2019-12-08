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
 include 'classes/client.class.php' ; 
 $DB = new BaseDonne;
 $base = $DB->connect();          
 $rep=$base->prepare('SELECT * FROM customer WHERE cid =:param_cid');
 $rep->bindParam(':param_cid', $_GET['cid']); 
 $rep->execute();  
 $data = $rep->fetch();
?>

<div class="container">
<div class="jumbotron">
<h3>Modify</h3>
</div>
<form method="POST" action="updateCl.php">
<div class="form-group">
    <input type="number" class="form-control" name="pid" value="<?php echo $data['cid']?>" hidden>  
  </div> 
 
    
    <label>Name :</label>
    <input type="text" class="form-control" name="name" value="<?php echo $data['name']?>">
   
    
    <label>Email:</label>
    <input type="email" class="form-control" name="email" value="<?php echo $data['email']?>">

  
    
    <label>Password</label>
    <input type="password" class="form-control" name="password" value="<?php echo $data['password']?>">
    
    
    <label>Adresse</label>    
    <input type="text" class="form-control" name="adresse" value="<?php echo $data['adresse']?>">
    <label>Phone</label>    
    <input type="text" class="form-control" name="phone" value="<?php echo $data['phone']?>">

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
