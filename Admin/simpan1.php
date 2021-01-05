<?php
require '../conn.php';

$fullname=$_POST['fullname'];
$age=$_POST['age'];
$icnum=$_POST['icnum'];
$caddress=$_POST['caddress'];
$contactnumber=$_POST['contactnumber'];
$licensetype=$_POST['licensetype'];
$carname=$_POST['carname'];
$bookingdate=$_POST['bookingdate'];
$returndate=$_POST['returndate'];
$email=$_POST['email'];


$sql="INSERT INTO booking(fullname,age,icnum,caddress,contactnumber,licensetype,carname,bookingdate,returndate,email ) 
VALUES ('$fullname', '$age', '$icnum','$caddress', '$contactnumber','$licensetype', '$carname','$bookingdate', '$returndate','$email')";
$conn->query($sql);
echo $conn->error;

header('location:index.php');