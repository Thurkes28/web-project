<?php
require '../conn.php';
$idCustomer= $_GET['idCustomer'];
$sql = "DELETE FROM booking WHERE idCustomer = $idCustomer";
$conn->query($sql);

echo $conn->error;
header('location: index.php');