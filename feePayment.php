<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/feeStyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head>
<body style="background-color: #CCCCFF;">	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand">Account Management</a>
</nav>
<?php
include 'connection.php';
$search = $_POST['search'];
$Select = "SELECT * FROM student WHERE id = $search";
$query = mysqli_query($conn,$Select);
$data = mysqli_fetch_array($query);
if($data){  
?>
<div class="container">
<form action="payment.php?id=<?php echo $data['id']?>" method="POST">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<span class="navbar-brand ml-auto mr-auto">Student Account Balance Sheet / Fee Payment</span>    
</nav><br>
<div>
<label><b>Semester :</b></label>
<select name="semsester" style="width: 50px;" required>
<option value="1">1</option>
</select>
</div><br>
<div class="form-group">
<table id="t01">
<tr>
<th>ID</th>
<th>Name</th>
<th>Examination Fee</th>
<th>Semester Fee</th>
<th>Hostel Fee</th>
<th>Scholarship</th>
<th>Payable Examination Fee</th>
<th>Payable Semester Fee</th>
<th>Payable Hostel Fee</th>

</tr>
<tr>
<td><?php echo $data['id'];?></td>
<td><?php echo $data['fName'];?> <?php echo $data['lName'];?></td>
<td><?php echo $data['ExaminationFee'];?></td>
<td><?php echo $data['SemesterFee'];?></td>
<td><?php echo $data['HostelFee'];?></td>
<td><?php echo $data['scholarship'];?></td>
<td><?php echo $data['ExaminationFee']-$data['pexamfee'];?></td>
<td><?php echo $data['SemesterFee']-$data['psemfee']-$data['scholarship'];?></td>
<td><?php echo $data['HostelFee']-$data['phostelfee']?></td>
</tr>
<?php
}  
else{         
header('location:fee.php');
}
$exam=$data['ExaminationFee']-$data['pexamfee'];
$sem=$data['SemesterFee']-$data['psemfee']-$data['scholarship'];
$hostel=$data['HostelFee']-$data['phostelfee'];
?>
</table>
<div class="form-group">
<br>
<tr>
<td>
<label><b>Hostel Fee : </b></label>
<input type="number" id="quantity" name="phostelfee" min="0" max="<?php echo $hostel?>" value="0"><br><br>
</td>
</tr>
<tr>
<td>
<label><b>Semester Fee : </b></label>
<input type="number" id="quantity" name="psemfee" min="0" max="<?php echo $sem?>" value="0"><br><br>
</td>
</tr>
<tr>
<td>
<label><b>Examination Fee :</b></label>
<input type="number" id="quantity" name="pexamfee" min="0" max="<?php echo $exam?>" value="0"><br><br>
</td>
</tr>
<input type="submit" class="btn" value="Update" name="updatePayment">
</div>
</div>
</form>
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>