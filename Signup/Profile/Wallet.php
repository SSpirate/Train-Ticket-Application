<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Wallet</title>

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
  <a class="active" href="#home"><b>Home</b></a>
  <a href="booking.php"><b>Booking</b></a>
  <a href="table.php"><b>Booking History</b></a>
  <a href="#"><b>Wallet</b></a>
</div>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<center>
<form method="post">
<div class="student-profile py-4">
  <div class="container">
      <div class="col-lg-4">
        <div  class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
    
            <h3>Welcome Back, <?php echo $name;?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Balance<h3 id="res"><?php echo $price;?></h3></strong></p>
           <div class="container-login100-form-btn p-t-25">
            <input type="text" id="name" name="amt" ><br><br>
            <button type = "submit" class="btn btn-primary" name="save" role="button"><b>Add Money</b></button>
          </div>
          </div>
        </div>
      </div>
    </form>
 </center>     
</section>
     
  <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
    <!-- Analytics -->
<footer class="page-footer dark">
        <div class="text-center p-4" style="background-color:rgb(54, 69, 79);">
            <h4 style="color:white;">© 2022 Copyright - RailGo</h4>
        </div>
    </footer>
	

<?php 

$host="localhost";
$user="root";
$password="";
$db="login";

$con= mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
if(isset($_POST['save'])){  
    $ant=$_POST['amt'];
    $sql = "UPDATE signup_details SET price= price + ? WHERE username= ?";
    $stmt= $con->prepare($sql);
    $stmt->bind_param("is", $ant,$username);
    $stmt->execute();
    $stmt->close();
    $sqll = "SELECT * FROM signup_details WHERE username = ?";
    $stmtt= $con->prepare($sqll);
    $stmtt->bind_param("s",$username);
    $stmtt->execute();
    $result = $stmtt->get_result();
    $rows = $result->fetch_assoc();
    $stmtt->close();
    if(isset($_COOKIE['price'])){
        unset($_COOKIE['price']);
       }      
    echo' <script type="text/JavaScript">
    window.location.href = "http://localhost/Login/connect.php";
    </script>'; 

}
   
?>

</html>
