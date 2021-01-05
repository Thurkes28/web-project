<?php
require '../conn.php';
$idupdate = $_GET['idupdate'];
$sql = "DELETE FROM aprroval WHERE idupdate = $idupdate";
$conn->query($sql);

echo $conn->error;
header('location: index.php#page5');