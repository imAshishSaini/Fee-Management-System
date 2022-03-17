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
  <?php
  include 'connection.php';
  $Select = "SELECT * FROM student";
  $query = mysqli_query($conn,$Select);
  ?>
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
  <div class="container">
    <form action="feePayment.php" method="POST">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <span class="navbar-brand ml-auto mr-auto">Students Account Balance Sheet / Fee Payment</span>    
      </nav><br>
      <div>
        <label><b>Semester :</b></label>
        <select name="semsester" style="width: 50px;" required>
          <option value="1">1</option>
        </select>
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search student id" aria-label="Search">
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
          <?php
          while($data = mysqli_fetch_array($query)){
            ?>
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
          ?>
        </table>
      </div>
    </form>
  </div>   

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>