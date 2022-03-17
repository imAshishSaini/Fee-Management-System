<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/style6.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head>
<body>	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">Account Management</a>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="accountantHome.php">Home <span class="sr-only">(current)</span></a>
</li>
</ul>
</div>
</nav>

<section class="my-5">
<div class="container">
<form action="" method="POST">
<div>
<h2 class="text-center">Student Details</h2>
</div><br><br>
<?php
include 'connection.php';
$id = $_POST['search'];
$Select = "SELECT * FROM student WHERE id = $id";
$query = mysqli_query($conn,$Select);
$data = mysqli_fetch_array($query);
if($data){  
?>
<table>
<div class="form-group">
<tr>
<td>
<label><b>ID :</b></label>
<a><?php echo $data['id']?></a>
</td>
<td>
<label><b>Student name :</b></label>
<a><?php echo $data['fName']?> <?php echo $data['lName']?></a>   
</td>
</tr>
<tr>
<td>
<label><b>Father name :</b></label>
<a><?php echo $data['ftName']?></a>
</td>
<td>
<label><b>Mother name :</b></label>
<a><?php echo $data['MtName']?></a>                
</td>
</tr>
<tr>
<td>
<label><b>Gender :</b></label>
<a><?php echo $data['gender']?></a>
</td>
<td>
<label><b>Category :</b></label>
<a><?php echo $data['category']?></a>
</td>
</tr>
<tr>
<td>
<label><b>Aadhar card :</b></label>
<a><?php echo $data['aadhar']?></a>
</td>
<td>
<label><b>Email id :</b></label>
<a><?php echo $data['email']?></a>
</td>
</tr>
<tr>
<td>
<label><b>Contact number :</b></label>
<a><?php echo $data['contact']?></a>
</td>
<td>
<label><b>Parents number :</b></label>
<a><?php echo $data['pcontact']?></a>
</td>
</tr>
<tr>
<td>
<label><b>10th Board :</b></label>
<a><?php echo $data['Board10']?></a>
</td>
<td>
<label><b>10th Marks :</b></label>
<a><?php echo $data['Marks10']?></a>
</td>
</tr>
<tr>
<td>
<label><b>12th Board :</b></label>
<a><?php echo $data['Board12']?></a>
</td>
<td>
<label><b>12th Marks :</b></label>
<a><?php echo $data['Marks12']?></a>
</td>
</tr>
<tr>
<td>
<label><b>Degree :</b></label>
<a><?php echo $data['Degree']?></a>
</td>
<td>
<label><b>House no/street no :</b></label>
<a><?php echo $data['hno']?></a>
</td>
</tr>
<tr>
<td>
<label><b>Village/Town/City :</b></label>
<a><?php echo $data['city']?></a>
</td>
<td>
<label><b>Pin code :</b></label>
<a><?php echo $data['pincode']?></a>
</td>
</tr>
<tr>
<td>
<label><b>District :</b></label>
<a><?php echo $data['district']?></a>
</td>
<td>
<label><b>State :</b></label>
<a><?php echo $data['state']?></a>
</td>
</tr>
</div>
</table>
<?php
}  
else{  
?>
<script>
alert('Invalid id');
</script>
<?php
}
?>
</form>
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>