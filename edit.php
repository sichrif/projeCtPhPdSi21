<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="plugin/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="plugin/bootstrap/datepicker.css" rel="stylesheet">
    <link href="plugin/font-awesome/font-awesome.css" rel="stylesheet">
    <link href="plugin/form-field/jquery.formstyler.css" rel="stylesheet">
    <link href="plugin/revolution-plugin/extralayers.css" rel="stylesheet">
    <link href="plugin/revolution-plugin/settings.css" rel="stylesheet">
    <link href="plugin/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugin/owl-carousel/owl.theme.default.css" rel="stylesheet">
    <link href="plugin/slick-slider/slick-theme.css" rel="stylesheet">
    <link href="plugin/magnific/magnific-popup.css" rel="stylesheet">
    <link href="plugin/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="plugin/animation/animate.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>
<body>
<header>
            <div class="header-part header-reduce sticky">
                <div class="header-top">
                    <div class="container">
                        <div class="header-top-inner">
                            <div class="header-top-left">
                                
                            </div>

                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                <a class="btn btn-primary" href="insert.php">Edit your Employees</a>
                </div>
        </header>
<?php
include 'classes/client.class.php';
$db=new dbconnection;
$cnnx=$db->connecta();
$reponse=$cnnx->prepare('SELECT * FROM employee WHERE eid =:param_id');
 $reponse->bindParam(':param_id', $_GET['eid']); 
 $reponse->execute();  
 $donnees = $reponse->fetch();

?>

<div class="container">
<h3>Editer étudiant</h3>
<form method="POST" action="update.php">
<div class="form-group">
    <input type="number" class="form-control" name="eid" value="<?php echo $donnees['eid']?>"hidden>
  </div>
  <div class="form-group row">
    <div class="col-xs-4">
    <label>Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $donnees['name']?>">
    </div>&nbsp; &nbsp;
  
</div>
  <div class="form-group row">
    <div class="col-xs-4">
    <label>Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $donnees['email']?>">
    </div>&nbsp; &nbsp;
    <div class="col-xs-4">
    <label>Phone</label>
    <input type="number" class="form-control" name="phone" value="<?php echo $donnees['phone']?>">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">enregistrer</button>
  <button class="btn  btn-secondary">Annuler</button>
</form>
</div>
</body>
</html>
