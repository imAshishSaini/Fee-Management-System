<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/style5.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head>
<body style="background-color: #CCCCFF;">	
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand">Account Management</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="adminHome.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>



  <div class="container">
    <form action="viewAccountant.php" method="POST">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <span class="navbar-brand ml-auto mr-auto">Search accountant</span>    
      </nav><br><br>
      <div>
        <a><img src="https://www.netclipart.com/pp/m/161-1613083_admin-clipart.png" style="height: 30%; width:30%; margin-left: 35%; margin-right: 10%;"></a><br><br>
        <input class="form-control mr-sm-2" id="searchbar" type="search" name="search" placeholder="Search accountant" aria-label="Search">
      </div>
    </form>
  </div>   











  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
