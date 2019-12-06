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
  <div class="container">
<h3>New Product</h3>
<form method="POST" action="store.php">
  <div class="form-group row">
  <div class="col-xs-4">
    <label>Name</label>
    <input type="text" class="form-control" name="name">
    
  </div>&nbsp; &nbsp;
  <div class="col-xs-4">
    <label>Description</label>
    <input type="text" class="form-control" name="description">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-4">
    <label>Price</label>
    <input type="text" class="form-control" name="price">
  </div>&nbsp; &nbsp;
  <div class="col-xs-4">
    <label>Image</label>
    <input type="text" class="form-control" name="file">
  </div>
  </div>
  <button type="submit" name="done"  class="btn btn-primary">Save</button>
   <?php if (isset($done)) echo  'Added with success !'; ?>
</form>
</div>
</body>
</html>
