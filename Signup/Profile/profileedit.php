<!DOCTYPE html>
<html lang="en">
<head>

      
	<title>Edit Personal details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images1/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
<!--===============================================================================================-->
<style>


.message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

.message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>

</head>
<body style="background-color:powderblue;">

<?php

  $email = $_COOKIE['email'];
  $name  = $_COOKIE['name'];
  $date = $_COOKIE['date'];
  $address  = $_COOKIE['address'];
  $gender = $_COOKIE['gender'];
  $username= $_COOKIE['username'];
?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form action="profileedit.php" method="post">
					<span class="login100-form-title p-b-55">
						Edit Personal Details
					</span>
						<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100"><strong>Full Name</strong></span>
						<input class="input100" type="text" value= "<?php echo $name; ?>" name="nam" id="fullname" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-pencil"></span>
						</span>

					    </div>
						<br>
					    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100"><strong>Email</strong></span>
						<input class="input100" id= "em" type="email" name="emai" value ="<?php echo $email;?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>
	<br>
					
					<br>
					<div class="wrap-input100 validate-input" data-validate="Address is required">
						<span class="label-input100"><strong>Address</strong></span>
						<input class="input100" type="text" name="addres" value ="<?php echo $address;?>"required>

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>

					</div>

						<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<br>
							<br>
							

							<button class="login100-form-btn" type="submit" name= "saves">
								Save Profile & Logout
							</button>
						</div>


					
					</div>
							
				</form>

			</div>
			
		</div>

	</div>

	

	
<!--===============================================================================================-->	
	<script src="C:/Users/wifig/Desktop/Signup/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="C:/Users/wifig/Desktop/Signup/vendor/bootstrap/js/popper.js"></script>
	<script src="C:/Users/wifig/Desktop/Signup/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="C:/Users/wifig/Desktop/Signup/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="C:/Users/wifig/Desktop/Signup/js/main.js"></script>
	<script>

var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var spclchars = document.getElementById("spclchars");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  var spclchar=/^(?=.*[!@#$%^&*])/g;
  if(myInput.value.match(spclchar)) {
    spclchars.classList.remove("invalid");
    spclchars.classList.add("valid");
  } else {
    spclchars.classList.remove("valid");
    spclchars.classList.add("invalid");
  }
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }

}
</script>
<var id="age">age</var>
<script>
    function Validate() {
		var fullname = document.getElementById("fullname").value;
        var password = document.getElementById("psw").value;
        var username = document.getElementById("usrname").value;
		var confirmPassword = document.getElementById("repeatpsw").value;
        var email = document.getElementById("em").value;
		var genderList = document.getElementsByClassName("gender");
		var gender = null;
		for(var i=0; i<genderList.length; i++){
			if(genderList[i].checked)
				gender = genderList[i].value;
		}
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var usernameformat = /^[a-zA-Z0-9_\.]+$/;
		var now =new Date();                            	//getting current date
		var currentY= now.getFullYear();                	//extracting year from the date
		var currentM= now.getMonth();                  		//extracting month from the date
		var dobget =document.getElementById("dateob").value; //getting user input
		var dob= new Date(dobget);                           //formatting input as date
		var prevY= dob.getFullYear();                        //extracting year from input date
		var prevM= dob.getMonth();                             //extracting month from input date
		
		var ageY =currentY - prevY;
		var flag=0;
		if(fullname.length>=31){
			alert("please enter fullname with less than 30 characters");
		}
		else{
			flag+=1;
		}

        if(email.match(mailformat))
        {
        	flag+=1;
        }
        else{
        	alert("You have entered a invalid email address!");
        }
  		if(ageY<=18){
  			alert("You must be above 18");
  		}
  		else{
  			flag+=1;
  		}
		if(username.match(usernameformat)){
			flag+=1;
		}
		else{
			alert("Please enter a valid username")
		}
       	if (password != confirmPassword) {
            alert("Passwords not matching.");
        }
        else{
        	flag+=1;
        }
		if(gender == null) {
       		alert('Please select gender');
		}
		else{
			flag+=1;
		}
		if(document.getElementById("ckb1").checked == false){
			alert("Accept the terms and conditions to continue")
		}
		else{
			flag+=1;
		}
		console.log("flag is : ",flag)
		if(flag==7){
			var validateBtn = document.getElementById('validate');
			var saveBtn = document.getElementById('save');
			validateBtn.style = "visibility: hidden;";
			saveBtn.style = "visibility: visible;";
		}

}
	

</script>
<script>
	function locations(){
	window.location.href='http://localhost/Login/Login.html';
}

</script>
<?php 

$host="localhost";
$user="root";
$password="";
$db="login";

$con= mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['saves'])){
    $emai=$_POST['emai'];
    $nam=$_POST['nam'];
    $addres=$_POST['addres'];
    $stmt = $con->prepare("UPDATE signup_details SET email = ? , full_name = ?, address =? WHERE username =?");
       $stmt->bind_param("ssss",$emai,$nam,$addres,$username);
		$stmt->execute();
    $stmt->close();
    echo' <script type="text/JavaScript"> window.location.href = "http://localhost/Login/Login.html";</script>';
    
}
?>
<footer class="page-footer dark">
        <div class="text-center p-4" style="background-color:rgb(54, 69, 79);">
            <h4 style="color:white;">© 2022 Copyright - RailGo</h4>
        </div>
    </footer>
</body>
</html>