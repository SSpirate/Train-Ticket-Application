<?php 
$error_message = "";$success_message = "";

$isValid = true;
if($isValid){

   $email = $_COOKIE['email'];
   $con = mysqli_connect('localhost', 'root', '', 'login');

   $stmt = $con->prepare("SELECT * FROM signup_details WHERE username = ?");
   $stmt->bind_param("s", $email);
   $stmt->execute();
   $result = $stmt->get_result();
   $rows = $result->fetch_assoc();
   if(isset($_COOKIE['name'])){
    unset($_COOKIE['name']);
   }
   if(isset($_COOKIE['email'])){
    unset($_COOKIE['email']);
   }
  
   header("Location: Profile.php");
   setcookie("name",$rows['full_name']);
   setcookie("email",$rows['email']);
   setcookie("username",$rows['username']);
   $stmt->close();

   }


?>