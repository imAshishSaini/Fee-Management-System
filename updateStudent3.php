
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
          <a class="nav-link" href="accountantHome.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <section class="my-5">
    <div class="container">
      <form action="" method="POST">
        <div>
          <h2 class="text-center">Update Student Details</h2>
        </div><br><br>
        <?php
        include 'connection.php';
        $id=$_GET['id'];
        $Select = "SELECT * FROM student WHERE id=$id";
        $query = mysqli_query($conn,$Select);
        $data = mysqli_fetch_array($query);
        if (isset($_POST['update'])) {
          $fName = $_POST['fName'];
          $lName = $_POST['lName'];
          $ftName = $_POST['ftName'];
          $MtName = $_POST['MtName'];
          $gender = $_POST['gender'];
          $category = $_POST['category'];
          $aadhar = $_POST['aadhar'];
          $email = $_POST['email'];
          $contact = $_POST['contact'];
          $pcontact = $_POST['pcontact'];
          $hno = $_POST['hno'];
          $city = $_POST['city'];
          $pincode = $_POST['pincode'];
          $district = $_POST['district'];
          $state = $_POST['state'];
          $password = $_POST['aadhar'];


          $Update = "UPDATE student SET fName='$fName', lName='$lName', ftName='$ftName', MtName='$MtName', gender='$gender', category='$category', aadhar=$aadhar, email='$email', contact=$contact, pcontact=$pcontact, hno='$hno', city='$city', pincode='$pincode', district='$district', state='$state' WHERE id=$id";

          $res = mysqli_query($conn,$Update);
          if ($res) {
            ?>
            <script>
              alert('Student Details Updated Successfully');
            </script>

            <?php
          }
          else {
            ?>
            <script>
              alert('Error');
            </script>

            <?php
          }
        }
        else {
        }
        ?>

        <div class="form-group">
          <div class="row">
            <div class="column">
              <label><b>First name</b></label>
              <input type="text" name="fName" placeholder="First name"  class="form-control" value="<?php echo $data['fName']?>" required>
            </div>
            <div class="column">
              <label><b>Last name</b></label>
              <input type="text" name="lName" placeholder="Last name" class="form-control" value="<?php echo $data['lName']?>">
            </div>
          </div><br>
          <div class="row">
            <div class="column">
              <label><b>Father name</b></label>
              <input type="text" name="ftName" placeholder="Father name" class="form-control" value="<?php echo $data['ftName']?>" required>
            </div>
            <div class="column">
              <label><b>Mother name</b></label>
              <input type="text" name="MtName" placeholder="Mother name" class="form-control" value="<?php echo$data['MtName']?>" required>
            </div>
          </div><br>
          <div class="row">
            <div class="column">
              <label><b>Gender</b></label>
              <select name="gender" class="form-control" value="<?php echo $data['gender']?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="column">
              <label><b>Category</b></label>
              <select name="category" class="form-control" value="<?php echo $data['category']?>" required>
                <option value="General">General</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
              </select>
            </div>
          </div><br>
          <div class="row">
            <div class="column">
              <label><b>Aadhar card</b></label>
              <input type="text" name="aadhar" placeholder="Aadhar card number" class="form-control" value="<?php echo $data['aadhar']?>" required>
            </div>
            <div class="column">
              <label><b>Email id</b></label>
              <input type="email" name="email" placeholder="Email id" class="form-control" value="<?php echo $data['email']?>">
            </div>
          </div><br>
          <div class="row">
            <div class="column">
              <label><b>Contact number</b></label>
              <input type="text" name="contact" placeholder="Contact number" class="form-control" value="<?php echo $data['contact']?>" required>
            </div>
            <div class="column">
              <label><b>Parents contact</b></label>
              <input type="text" name="pcontact" placeholder="Contact number" class="form-control" value="<?php echo $data['pcontact']?>">
            </div>
          </div><br>
          <div class="row">
            <div class="column">
              <label><b>10th Board</b></label>
              <input type="text" name="Board10" placeholder="Ex. Central Board Of Secondary Education" class="form-control" value="<?php echo $data['Board10']?>" required>
            </div>

            <div class="column">
              <label><b>10th Marks</b>(Percentage)</label>
              <input type="text" name="Marks10" placeholder="Marks" class="form-control" value="<?php echo $data['Marks10']?>" required>
            </div>
          </div><br>

          <div class="row">
            <div class="column">
              <label><b>12th Board</b></label>
              <input type="text" name="Board12" placeholder="Ex. Central Board Of Secondary Education" class="form-control" value="<?php echo $data['Board12']?>" required>
            </div>

            <div class="column">
              <label><b>12th Marks</b>(Percentage)</label>
              <input type="text" name="Marks12" placeholder="Marks" class="form-control" value="<?php echo $data['Marks12']?>" required>
            </div>
          </div><br>

          <div class="row">
            <div class="column">
              <label><b>Degree</b></label>
              <select name="Degree" class="form-control" value="<?php echo $data['Degree']?>" required>
                <option value="B.E/B.Tech in Aeronautical Engineering">B.E/B.Tech in Aeronautical Engineering</option>
                <option value="B.E/B.Tech in Automobile Engineering">B.E/B.Tech in Automobile Engineering</option>
                <option value="B.E/B.Tech in Biotechnology">B.E/B.Tech in Biotechnology</option>
                <option value="B.E/B.Tech in Civil Engineering">B.E/B.Tech in Civil Engineering</option>
                <option value="B.E/B.Tech in Chemical Engineering">B.E/B.Tech in Chemical Engineering</option>
                <option value="B.E/B.Tech in Computer Science and Engineering (Artificial Intelligence)">B.E/B.Tech in Computer Science and Engineering (Artificial Intelligence)</option>
                <option value="B.E/B.Tech in Computer Science and Engineering (Big Data)">B.E/B.Tech in Computer Science and Engineering (Big Data)</option>
                <option value="B.E/B.Tech in Computer Science and Engineering (Internat Of Things)">B.E/B.Tech in Computer Science and Engineering (Internat Of Things)</option>
                <option value="B.E/B.Tech in Computer Science and Engineering">B.E/B.Tech in Computer Science and Engineering</option>
                <option value="B.E/B.Tech in Electrical Engineering">B.E/B.Tech in Electrical Engineering</option>
                <option value="B.E/B.Tech in Mechanical Engineering">B.E/B.Tech in Mechanical Engineering</option>
              </select>
            </div>

            <div class="column">
              <label><b>House no/street no</b></label>
              <input type="text" name="hno" placeholder="House no/street no" class="form-control" value="<?php echo $data['hno']?>">
            </div>
          </div><br>

          <div class="row">
            <div class="column">
              <label><b>Village/Town/City</b></label>
              <input type="text" name="city" placeholder="Village/Town/City" class="form-control" value="<?php echo $data['city']?>">
            </div>

            <div class="column">
              <label><b>Pin code</b></label>
              <input type="text" name="pincode" placeholder="Pin code" class="form-control" value="<?php echo $data['pincode']?>">
            </div>
          </div><br>

          <div class="row">
            <div class="column">
              <label><b>District</b></label>
              <input type="text" name="district" placeholder="District" class="form-control" value="<?php echo $data['district']?>" required>
            </div>

            <div class="column">
              <label><b>State</b></label>
              <input type="text" name="state" placeholder="State" class="form-control" value="<?php echo $data['state']?>">
            </div>
          </div><br><br><br>
          <label>
            <input type="checkbox" required><b> I hereby declare that the above mentioned information is correct to the best of my knowledge and I bear the responsibility for the correctness of the above mentioned particulars.</b></label><br><br><br>
            <input type="submit" class="btn" value="Update" name="update">
          </form>
        </div>
      </section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>