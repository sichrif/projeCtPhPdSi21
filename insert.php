<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                <a class="btn btn-primary" href="insert.php">New Employee</a>
                </div>
        </header>
<div class="container">
<h3>New Employee</h3>
<form method="POST" action="store.php">
  <div class="form-group row">
  <div class="col-xs-4">
    <label> Name</label>
    <input type="text" class="form-control" name="name">
  </div>&nbsp; &nbsp;
 
  </div>
  <div class="form-group row">
  <div class="col-xs-4">
    <label>Email</label>
    <input type="email" class="form-control" name="email">
  </div>&nbsp; &nbsp;
  <div class="col-xs-4">
    <label>Phone</label>
    <input type="number" class="form-control" name="phone">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
</div>


</body>
</html>