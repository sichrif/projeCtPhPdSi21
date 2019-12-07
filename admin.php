<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Admin Dashboard</title>

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

                
                <a class="btn btn-primary" href="Employee/home.php">New Product</a>
                <a class="btn btn-primary" href="insert.php">New Employee</a>
                </div>
        </header>

<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Nom</th>
    <th>Phone</th>
    <th>email</th>
    <th>Edit</th>
    <th>Delete</th>
    
 

</tr>











<?php
include 'classes/client.class.php';
$clients= new client;
$listclient= $clients->readAllClients();
while($data=$listclient->fetch()){
    echo '<tr><td>'.$data['eid'].'</td>';
    echo '<td>'.$data['name'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td><a href="edit.php?eid='.$data['eid'].'"><button class="btn"><i class="fa fa-edit"></i> Edit</button></a>  </td>     ';  
    echo '<td><a href="delete.php?eid='.$data['eid'].'"> <button class="btn"><i class="fa fa-trash"></i> Trash</button></a></td> </tr>';  


}
?>

</table>

</body>
</html>