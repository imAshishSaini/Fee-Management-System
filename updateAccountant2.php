<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/style5.css">
  <link rel="stylesheet" type="text/css" href="style/style3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>	
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Account Management</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="adminHome.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <section class="my-5">
    <div class="container">
      <form action="" method="POST">
        <div>
          <h2 class="text-center">Accountant Details</h2>
        </div><br><br>
        <div class="form-group">
          <table id="t01">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email id</th>
              <th>Contact</th>
              <th>Address</th>
              <th>Update</th>
            </tr>
            <?php
            include 'connection.php';
            $search = $_POST['search'];
            $Select = "SELECT * FROM accountant WHERE id = $search";
            $query = mysqli_query($conn,$Select);
            $data = mysqli_fetch_array($query);
            if($data){  
              ?>
              <tr>
                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['fName'];?> <?php echo $data['lName'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['contact'];?></td>
                <td><?php echo $data['city'];?>, Distt. <?php echo $data['district'];?></td>
                <td><a href="updateAccountant3.php?id=<?php echo $data['id']?>" data-toggle="tooltip" data-placement="bottom" title="Update"> <i class="fa fa-edit" style="font-size: 20px; color: green; align-items: center;" ></i></a></td>
              </tr>
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
          </table>
        </div>
      </form>
    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>