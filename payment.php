<?php
include 'connection.php';

if (isset($_POST['updatePayment'])) {
  $id = $_GET['id'];


  $Select = "SELECT pexamfee,phostelfee,psemfee FROM student WHERE id=$id";
  $query = mysqli_query($conn,$Select);
  $data = mysqli_fetch_array($query);

  $exam = $_POST['pexamfee']+$data['pexamfee'];
  $hostel = $_POST['phostelfee']+$data['phostelfee'];
  $sem = $_POST['psemfee']+$data['psemfee'];

  $Update = "UPDATE student SET pexamfee='$exam', phostelfee='$hostel', psemfee='$sem' WHERE id=$id";
  $query2 = mysqli_query($conn,$Update);

  if ($query2) {
    header('location:fee.php');            
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