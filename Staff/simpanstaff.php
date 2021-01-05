<?php
require '../conn.php';

$availability=$_POST['availability'];
$bookingstatus=$_POST['bookingstatus'];
$carcondition=$_POST['carcondition'];
$currentioc=$_POST['currentioc'];
$staffname=$_POST['staffname'];
$number=$_POST['number'];



$sql="INSERT INTO aprroval(availability,bookingstatus,carcondition,currentioc,staffname,number) 
VALUES ('$availability', '$bookingstatus','$carcondition', '$currentioc','$staffname', '$number')";

$conn->query($sql);
echo $conn->error;

header('location:index.php#page5');