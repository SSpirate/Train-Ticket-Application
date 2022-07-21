
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Profile Page</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    
	    <link rel="stylesheet" href="css/style.css">
    <style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}
body {
  background-image: url('https://source.unsplash.com/twukN12EN7c/1920x1080'); 
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 100px;
  background-color: #ffffff;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #1E90FF;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}
.logoutLblPos{

   position:fixed;
   right:10px;
   top:5px;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>


<?php
  $email = $_COOKIE['email'];
  $name  = $_COOKIE['name'];
  $date = $_COOKIE['date'];
  $address  = $_COOKIE['address'];
  $gender = $_COOKIE['gender'];
  $username= $_COOKIE['username'];
  $price = $_COOKIE['price'];
?>





<section>
  <form align="right" name="form1" method="post" action="../../Login.html">
  <label class="logoutLblPos">
  <input class="btn btn-primary" name="submit2" type="submit" id="submit2" value="Log Out">
  </label>
</form>
<div class="sidebar">
  <a class="active" href="/Login/Signup/Profile/Profile.php"><b>RailGo</b></a>
   <a href="/Login/Signup/Profile/Profile.php"><b>Home</b></a>
  <a href="/Login/booking.php"><b>Booking</b></a>
  <a href="/Login/Signup/Profile/table.php"><b>Booking History</b></a>
  <a href="/Login/Wallet.php"><b>Wallet</b></a>
  <a href="/Login/Signup/Terms.html" target="_blank"><b>Support</b></a>
</div>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
    
            <h3>Welcome Back, <?php echo $name;?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Email ID:<h3><?php echo $email;?></h3></strong></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Details</h3>
          </div>

      <div class="col-lg-9">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Update Password</h3>
          </div>
          <div class="card-body pt-0">

          
          <div class="container-login100-form-btn p-t-25">
            <a class="btn btn-primary" href="../../Reset_Pass.php" role="button">Reset Password</a>
          </div>

          </div>
        </div>
        <br>
        <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Edit Your Profile Here</h3>
          </div>
          <div class="card-body pt-0">

          
          <div class="container-login100-form-btn p-t-25">
            <a class="btn btn-primary" href="profileedit.php" role="button">Edit Profile</a>
          </div>

          </div>
        </div>

          <div style="height: 26px"></div>
          <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Booking History</h3>
          </div>
          <div class="card-body pt-0">
              <div class="container-login100-form-btn p-t-25">
            <a class="btn btn-primary" href="table.php" role="button">View Booking History</a>
          </div>
          </div>
        </div>
<br>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
              <p class="mb-0"><strong class="pr-1">Date Of Birth:<h3><?php echo $date;?></h3></strong></p>
              <p class="mb-0"><strong class="pr-1">Gender:<h3><?php echo $gender;?></h3></strong></p>
              <p class="mb-0"><strong class="pr-1">Address:<h3><?php echo $address;?></h3></strong></p>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
     
  <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


    <!-- Analytics -->
<footer class="page-footer dark">
        <div class="text-center p-4" style="background-color:rgb(54, 69, 79);">
            <h4 style="color:white;">© 2022 Copyright - RailGo</h4>
        </div>
    </footer>
	</body>
</html>