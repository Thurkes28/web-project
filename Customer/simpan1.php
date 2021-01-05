<?php
require '../conn.php';

$idCar=$_POST['idCar'];
$idCustomer=$_POST['idCustomer'];
$bookingdate=$_POST['bookingdate'];
$returndate=$_POST['returndate'];
$goingto=$_POST['goingto'];

#echo '<pre>', print_r($_POST); exit;

$sql="INSERT INTO booking (idCar,idCustomer,bookingdate,returndate,goingto ) 
VALUES ('$idCar','$idCustomer','$bookingdate','$returndate','$goingto')";
#echo $sql; exit;
$conn->query($sql);

echo $conn->error;

header('location:index.php#page4');