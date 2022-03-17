<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head>
<body>  
  <?php
  include 'connection.php';
  if(isset($_POST['Login'])){
    $id = $_POST['id'];
    $password = $_POST['password'];

    $id_search = "SELECT id,password FROM accountant WHERE id=$id";
    $query = mysqli_query($conn,$id_search);
    $id_count = mysqli_num_rows($query);
    if($id_count){
      $id_pass = mysqli_fetch_array($query);
      $pass = $id_pass['password'];
      $_SESSION['accountantID'] = $id_pass['id'];
      if($password == $pass){
        header('Location: accountantHome.php' . $_GET['redirect']);
      }else{
        ?>
        <script>
          alert('Invalid password');
        </script>
        <?php
      }
    }else{
      ?>
      <script>
        alert('Invalid ID');
      </script>
      <?php
    }

  }
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Account Management</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST">
      <h2>WELCOME TO ACCOUNT MANAGEMENT SYSTEM</h2>
      <h4>Accountant Login</h4>
      <div class="form-group">
        <label for=""><b>User Id</b></label>
        <input type="text" name="id" placeholder="Enter user Id" class="form-control" required>
      </div>
      <div class="form-group">
        <label for=""><b>Password</b></label>
        <input type="Password" name="password" placeholder="Enter password" class="form-control" required>
      </div>
      <input type="submit" class="btn" value="Login" name="Login">
    </form>
  </div>   






  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>