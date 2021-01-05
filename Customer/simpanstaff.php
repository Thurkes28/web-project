<?php
require '../conn.php';

$availability=$_POST['availability'];
$bookingstatus=$_POST['bookingstatus'];
$carcondition=$_POST['carcondition'];
$currentloc=$_POST['currentloc'];
$staffname=$_POST['staffname'];
$number=$_POST['number'];



$sql="INSERT INTO aprroval(availability,bookingstatus,carcondition,currentloc,staffname,number) 
VALUES ('$availability', '$bookingstatus','$carcondition', '$currentloc','$staffname', '$number')";
$conn->query($sql);
echo $conn->error;

header('location:index.php');