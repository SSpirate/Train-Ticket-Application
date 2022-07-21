
<!DOCTYPE html>
<html lang="en">

<script type="text/javascript">
        function Redirect() {
            const URLS = [
        'http://localhost/Login/Wallet.php',
        
            ];
  
            for (let i = 0; i < URLS.length; i++) {
                setTimeout(() => {
                    const a = document.createElement('a');
  
                    a.style.display = 'none';
                    a.href = URLS[i];
                    a.target = '_blank';
                    document.body.appendChild(a);
  
                    a.click();
                    a.remove();
                }, i * 0);
            }
        }
    </script>
</html>
<?php 
echo '<a href="Login.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back To Login</a>';
$host="localhost";
$user="root";
$password="";
$db="login";

$con= mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['save'])){
    
    $uname=$_POST['email'];
    $password=$_POST['pass'];
    
    $sql="select * from login_details where email='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
       $stmt = $con->prepare("SELECT * FROM signup_details WHERE username = ?");
       $stmt->bind_param("s", $uname);
       $stmt->execute();
       $result = $stmt->get_result();
       $rows = $result->fetch_assoc();
       if(isset($_COOKIE['name'])){
        unset($_COOKIE['name']);
       }
       if(isset($_COOKIE['email'])){
        unset($_COOKIE['email']);
       }
        if(isset($_COOKIE['dat'])){
        unset($_COOKIE['dat']);
       }
       if(isset($_COOKIE['address'])){
        unset($_COOKIE['address']);
       }
       if(isset($_COOKIE['gender'])){
        unset($_COOKIE['gender']);
       }
       if(isset($_COOKIE['username'])){
        unset($_COOKIE['username']);
       }
       if(isset($_COOKIE['price'])){
        unset($_COOKIE['price']);
       }
       header("Location: Profile.php");
       setcookie("name",$rows['full_name']);
       setcookie("email",$rows['email']);
       setcookie("date",$rows['dat']);
       setcookie("address",$rows['address']);
       setcookie("gender",$rows['gender']);
       setcookie("username",$rows['username']);
       setcookie("price",$rows['price']);
       $stmt->close();
        header("Location: Reset_pass.php");
        header("Location: Signup/Profile/connect.php");

        exit();
    }
    else{
        
        
        echo '<script>alert("You have entered incorrect credentials!!")</script>';
        
    }
        
}
?>
     