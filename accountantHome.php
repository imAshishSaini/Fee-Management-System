<?php
session_start();
if(!isset($_SESSION['accountantID'])){
  header('location:accountantLogin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/style4.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head>
<body style="background-color: #CCCCFF;">	
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Account Management</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="accountantLogout.php">Logout <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav><br><br>
  <div id="mySidenav" class="sidenav">
    <a href="fee.php" id="sidenav1">Fee payment</a>
    <a href="addStudent.php" id="sidenav2">Add student</a>
    <a href="searchStudent.php" id="sidenav3">View student</a>
    <a href="updateStudent1.php" id="sidenav4">Edit student</a>
    <a href="deleteStudent1.php" id="sidenav5">Delete student</a>
    <a href="contact.php" id="sidenav6">Contact us</a>
  </div>
  <section class="my-5">
    <div class="container">
      <form action="" method="POST">
        <div>
          <h2 class="text-center">My Profie</h2>
        </div><br><br>
        <?php
        include 'connection.php';
        $id = $_SESSION['accountantID'];
        $Select = "SELECT * FROM accountant WHERE id = $id";
        $query = mysqli_query($conn,$Select);
        $data = mysqli_fetch_array($query);  
        ?>
        <table>
          <div class="form-group">
            <tr>
              <td>
                <label><b>ID :</b></label>
                <a><?php echo $data['id']?></a>
              </td>
              <td>
                <label><b>Accountant name :</b></label>
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
                <label><b>Emergency number :</b></label>
                <a><?php echo $data['econtact']?></a>
              </td>
            </tr>
            <tr>
              <td>
                <label><b>House no/street no :</b></label>
                <a><?php echo $data['hno']?></a>
              </td>
              <td>
                <label><b>Village/Town/City :</b></label>
                <a><?php echo $data['city']?></a>
              </td>
            </tr>
            <tr>
              <td>
                <label><b>Pin code :</b></label>
                <a><?php echo $data['pincode']?></a>
              </td>
              <td>            <label><b>District :</b></label>
                <a><?php echo $data['district']?></a>
              </td>
            </tr>
            <tr>
              <td>
                <label><b>State :</b></label>
                <a><?php echo $data['state']?></a>
              </td>
            </tr>
          </div>
        </table>
      </form>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>