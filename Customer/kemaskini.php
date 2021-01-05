<?php
require '../conn.php';


$idCustomer=$_POST['idCustomer'];
$bookingdate=$_POST['bookingdate'];
$returndate=$_POST['returndate'];
$goingto=$_POST['goingto'];



$sql="UPDATE booking SET bookingdate='$bookingdate', 
returndate='$returndate', goingto='$goingto'  WHERE idCustomer = $idCustomer";
$conn->query($sql);
echo $conn->error;

header('location:index.php#page4');