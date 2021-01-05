<?php
require '../conn.php';
$idCar = $_GET['idCar'];
$sql = "DELETE FROM car WHERE idCar = $idCar";
$conn->query($sql);

echo $conn->error;
header('location: index.php');