<?php
require 'classes/client.class.php';
$id=$_GET['eid'];
$kk = new client;
$ll=$kk->delete($id);
header('location:admin.php');
