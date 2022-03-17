<?php
include 'connection.php';
$id=$_GET['id'];
$delete = "DELETE FROM accountant WHERE id=$id";
$query = mysqli_query($conn,$delete);

header('location:deleteAccountant1.php');
?>