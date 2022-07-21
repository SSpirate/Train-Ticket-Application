<?php
$email = $_COOKIE['email'];
$username= $_COOKIE['username'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

      
    <title>Train Ticket Application</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                <form action="Reset_pass.php" method="post">
                    <span class="login100-form-title p-b-55">
                        Reset Password
                    </span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Enter the Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>


                    
                    <div class="container-login100-form-btn p-t-25">
                        <button class="login100-form-btn" name="recover">
                            Update New Password
                        </button>
                    </div>

                
                </form>
            </div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body> 
<footer class="page-footer dark">
        <div class="text-center p-4" style="background-color:rgb(54, 69, 79);">
            <h4 style="color:white;">© 2022 Copyright - RailGo</h4>
        </div>
    </footer>
</html>


<?php 
$host="localhost";
$user="root";
$password="";
$db="login";

$con= mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['recover'])){
    $pass=$_POST['pass'];
    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number    = preg_match('@[0-9]@', $pass);
    $specialChars = preg_match('@[^\w]@', $pass);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) {
        echo '<script>alert("Your Password is not valid")</script>';
    }else{
        $stmt = $con->prepare("UPDATE signup_details SET  password= ? WHERE email =?");
    $stmt->bind_param("ss",$pass,$email);
    $stmt->execute();
    $stmtt = $con->prepare("UPDATE login_details SET  password= ? WHERE email =?");
    $stmtt->bind_param("ss",$pass,$username);
    $stmtt->execute();
    $stmt->close();
    $stmtt->close();
    echo '<script>alert("Password Updated Successfully and You will be redirected to Login Page")</script>';
    echo' <script type="text/JavaScript"> window.location.href = "http://localhost/Login/Login.html";</script>';
    
}   
    
}
?>