<?php
session_start();
session_destroy();
header('location:accountantLogin.php');
?>