<?php
include 'config.php';

$id = $_GET['id'];
$sql = "DELETE FROM game WHERE id = $id";
$conn->query($sql);
header("Location: wala.php");
?>