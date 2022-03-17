<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE DATABASE accounts";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$database = "accounts";
$conn = new mysqli($servername, $username, $password, $database);


$sql = "CREATE TABLE admin (id BIGINT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, fName VARCHAR(256) NOT NULL, lName VARCHAR(256) NULL DEFAULT NULL, ftName VARCHAR(256) NOT NULL, mtName VARCHAR(256) NOT NULL, gender VARCHAR(6) NOT NULL, category VARCHAR(7) NOT NULL, aadhar VARCHAR(12) NOT NULL, email VARCHAR(256) NOT NULL UNIQUE, contact VARCHAR(10) NOT NULL, address TEXT NOT NULL, password VARCHAR(256) NOT NULL)";

if ($conn->query($sql) === TRUE) {
  echo "Table Admin Created Successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO admin VALUES (123456, 'Ashish', 'Saini', 'Shyam', 'Neelam', 'Male', 'OBC', '956231478963', '19bcs1363@gmail.com', '7419055866', 'Madlauda Distt. Panipat, Haryana', 'Ashish@123')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "CREATE TABLE accountant (id BIGINT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, fName VARCHAR(256) NOT NULL, lName VARCHAR(256) NULL DEFAULT NULL, ftName VARCHAR(256) NOT NULL, MtName VARCHAR(256) NOT NULL, gender VARCHAR(6) NOT NULL, category VARCHAR(7) NOT NULL, aadhar BIGINT(12) NOT NULL, email VARCHAR(256) NOT NULL UNIQUE, contact BIGINT(10) NOT NULL, econtact BIGINT(10) NULL DEFAULT NULL, hno VARCHAR(256) NOT NULL, city VARCHAR(256) NOT NULL, pincode VARCHAR(20) NOT NULL, district VARCHAR(50) NOT NULL, state VARCHAR(50) NOT NULL, password VARCHAR(256) NOT NULL)";

if ($conn->query($sql) === TRUE) {
  echo "Table Accountant Created Successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE student (id BIGINT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, fName VARCHAR(256) NOT NULL, lName VARCHAR(256) NULL DEFAULT NULL, ftName VARCHAR(256) NOT NULL, MtName VARCHAR(256) NOT NULL, gender VARCHAR(6) NOT NULL, category VARCHAR(7) NOT NULL, aadhar BIGINT(12) NOT NULL, email VARCHAR(256) NOT NULL UNIQUE, contact BIGINT(10) NOT NULL, pcontact BIGINT(10) NULL DEFAULT NULL, Degree VARCHAR(256) NOT NULL, Board10 VARCHAR(256) NULL DEFAULT NULL, Marks10 VARCHAR(256) NOT NULL, Board12 VARCHAR(256) NOT NULL, Marks12 VARCHAR(6) NOT NULL, hno VARCHAR(256) NOT NULL, city VARCHAR(256) NOT NULL, pincode VARCHAR(20) NOT NULL, district VARCHAR(50) NOT NULL, state VARCHAR(50) NOT NULL, ExaminationFee INT NOT NULL DEFAULT '2000', SemesterFee INT NOT NULL DEFAULT '80000', HostelFee INT NOT NULL DEFAULT '90000', pexamfee INT NULL DEFAULT NULL, psemfee INT NULL DEFAULT NULL, phostelfee INT NULL DEFAULT NULL, scholarship INT NULL DEFAULT NULL, password VARCHAR(256) NOT NULL)";

if ($conn->query($sql) === TRUE) {
  echo "Table Student Created Successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
?>