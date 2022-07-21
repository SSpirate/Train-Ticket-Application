<?php 
$error_message = "";$success_message = "";

// Register user
if(isset($_POST['save'])){

   $fullname = trim($_POST['name']);
   $username = trim($_POST['username']);
   $email = trim($_POST['email']);
   $address = trim($_POST['address']);
   $date_field = date('Y-m-d',strtotime($_POST['dob']));
   $gender = trim($_POST['gender']);
   $password = trim($_POST['pass']);
   $con = mysqli_connect('localhost', 'root', '', 'login');

   $isValid = true;

if(isset($_POST['saves'])){
  
}
   if($isValid){

     // Check if Email-ID already exists
     $stmt = $con->prepare("SELECT * FROM signup_details WHERE email = ?");
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $result = $stmt->get_result();
     $stmt->close();
     if($result->num_rows > 0){
       $isValid = false;
       $error_message = "Email-ID is already existed.";
     }

   }

     $insertSQL = "INSERT INTO signup_details (full_name,email,username,password,address,gender,dat) values(?,?,?,?,?,?,?)";
     $stmt = $con->prepare($insertSQL);
     $stmt->bind_param("sssssss",$fullname,$email,$username,$password,$address,$gender,$date_field);
     $stmt->execute();
     $stmt->close();
     $insertSQLL = "INSERT INTO login_details (email,password) values(?,?)";
     $stmtt = $con->prepare($insertSQLL);
     $stmtt->bind_param("ss",$username,$password);
     $stmtt->execute();
     $stmtt->close();
    echo' <script type="text/JavaScript"> window.location.href = "http://localhost/Login/Login.html";</script>';
}
?>