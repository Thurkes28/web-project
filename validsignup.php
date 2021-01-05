<?php
require 'conn.php';


$username=$_POST['username'];
$password=$_POST['psw'];
$fullname=$_POST['fullname'];
$age=$_POST['age'];
$icnum=$_POST['icnum'];
$caddress=$_POST['caddress'];
$contactnumber=$_POST['contactnumber'];
$licensetype=$_POST['licensetype'];
$email=$_POST['email'];

$sql="INSERT INTO customer(username,password,fullname,age,icnum,caddress,contactnumber,licensetype,email) VALUES 
('$username', '$password', '$fullname', '$age', '$icnum', '$caddress', '$contactnumber', '$licensetype', '$email')";
$conn->query($sql);
echo $conn->error;
header('location:index.php');
