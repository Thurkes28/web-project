<?php
require '../conn.php';
 
$idCar=$_POST['idCar'];
$carname=$_POST['carname'];
$carbrand=$_POST['carbrand'];
$priceperhour=$_POST['priceperhour'];
$priceperweek=$_POST['priceperweek'];
$priceperday=$_POST['priceperday'];


$sql="UPDATE car SET carname='$carname',carbrand='$carbrand',priceperhour='$priceperhour', 
priceperweek='$priceperweek',priceperday='$priceperday' WHERE idCar = $idCar";
$conn->query($sql);
echo $conn->error;

header('location:index.php');