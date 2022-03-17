<?php
include 'connection.php';
$id=$_GET['id'];
$delete = "DELETE FROM student WHERE id=$id";
$query = mysqli_query($conn,$delete);

header('location:deleteStudent1.php');
?>