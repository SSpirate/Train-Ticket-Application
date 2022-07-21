<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="style.css">
    <!--BOOTSTRAP LINK-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .signup-form{
    height:500px;
    width:600px;
    margin-top:5%;
    margin-left:25%;
}
.Signup-head{
    padding:8px;
}
.signup-content .radio{
    margin:10px 10px;
}
.signup-content2 .input{
    width:400px;
    padding:10px;
    margin:10px;
    color:#fff;
}
.signup-content2 .tarikh{
    margin:10px;
    padding:10px;
    color:#fff;
}
.signup-content2  .person{
    padding:10px;
    margin:10px;
    color:#fff;
}
.signup-content2 .travel{
    margin:20px 20px;
}
.signup-content2 .travel2{
    padding:5px;
}
.signup-content2 .submit-btn{
    border:none;
    outline:none;
    width:200px;
    padding:10px;
    margin-left:200px;
}
body {
  background-image: url('https://source.unsplash.com/twukN12EN7c/1920x1080'); 
}
signup-form {
  border: 12px solid red;
  border-radius: 35px;
}
submit-btn{
    color: white;

}

@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;900&display=swap');

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
    

              
<!-- Student Profile -->
    <form method="post">
        <div class="sidebar">
  <a class="active" href="/Login/Signup/Profile/Profile.php"><b>RailGo</b></a>
   <a href="/Login/Signup/Profile/Profile.php"><b>Home</b></a>
  <a href="#"><b>Booking</b></a>
  <a href="/Login/Signup/Profile/table.php"><b>Booking History</b></a>
  <a href="/Login/Wallet.php"><b>Wallet</b></a>
  <a href="/Login/Signup/Terms.html" target="_blank"><b>Support</b></a>
</div>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">

        <div class="signup-form bg-light rounded">

            <div class="Signup-head bg-primary rounded">
                <h1 class="text-white"><center>BOOK YOUR TICKET</center></h1>
            </div>
            <center>
            <div class="signup-content">
                <span>One Way</span> <input type="radio" class="gender" name="mode" value="one way">
                <span>Return</span> <input type="radio" class="gender" name="mode" value="return">
            </div>
        </center>
            <center>
            <div class="signup-content2">
               <label class="text travel" ><b>From:</b></label>
            <select name="from" style="background-color: #e3f2fd;"class="text travel2" required>
                <option></option>
                <option value="Chennai">Chennai</option>
                <option value="Karur">Karur</option>
                <option value="Erode">Erode</option>
                <option value="Jolarpet">Jolarpet</option>
                <option value="Coimbatore">Coimbatore</option>
                <option value="Salem">Salem</option>
            </select>
            <br>
            <label class="text travel" ><b>To:</b></label>
            <select name="to" style="background-color: #e3f2fd;"class="text travel2" required>
                <option></option>
                <option value="Chennai">Chennai</option>
                <option value="Karur">Karur</option>
                <option value="Erode">Erode</option>
                <option value="Jolarpet">Jolarpet</option>
                <option value="Coimbatore">Coimbatore</option>
                <option value="Salem">Salem</option>
            </select>
            
            <br>
            <label class="text-dark" style="margin-left:10px;"><b>Depart</b></label>
            <input name ="depart" type="date" min="2022-04-07" class="tarikh" style="color:black; background-color: #e3f2fd;" id="depart" required >
            <label class="text-dark" style="margin-left:10px;"><b>Return</b></label>
            <input name="return" type="date" min="2022-04-07" class="tarikh" style="color:black;background-color: #e3f2fd;"  id="returning">

            <input name ="adult" type="number" class=" person" style="background-color: #e3f2fd;" placeholder="Adults" id="adults" required>
            <input name ="child" type="number" class="person" style="background-color: #e3f2fd;" placeholder="Children" id="children"><br>

            <label  class="text travel" ><b>Travel Class</b></label>
            <select name= "class1" style="background-color: #e3f2fd;"class="text travel2" required>
                <option></option>
                <option value = "First Class/1A">First Class/1A</option>
                <option value = "AC 2tier/2A" >AC 2tier/2A</option>
                <option value = "AC 3tier/3A">AC 3tier/3A</option>
                <option value = "Executive class chair car/Economy Class">Executive class chair car/Economy Class</option>
                <option value = "AC Chair Car">AC Chair Car</option>
                <option value = "Sleeper Class">Sleeper Class</option>
                <option value = "Second Class">Second Class</option>
                <option value = "General">General</option>
            </select>

            <input name ="saves" type="submit" onclick="Validatebooking()" value="Check Availability" class="submit-btn bg-primary" style="color: white;">
        </div>
        <center>
        </div>

    </form>
<script>
    function Validatebooking(){
        var radio1 = document.getElementById("radio1");
        var radio2 = document.getElementById("radio2");
        var adults = document.getElementById("adults").value;
        var children = document.getElementById("children").value;
        var from = document.getElementById("from").value;
        var to = document.getElementById("to").value;
        
        var depart = document.getElementById("depart").value;
        var returning = document.getElementById("returning").value;
        var date1 = new Date(depart);
        var date2 = new Date(returning);
        var date3 = new Date();
        var date4 = date3.getMonth() + "/" + date3.getDay() + "/" + date3.getYear();
        var currentDate = new Date(date4);
        var flag=0;
        console.log();
        if (radio1.checked==true || radio2.checked==true) {
            flag+=1;
        }
        else{
            alert("select one way or return");
        }
        if (from==to) {
            alert("From and To cannot be same");
        }
        
        else{
            flag+=1;
        }
        if (depart>returning) {
            alert("returning date cannot be before depature date");
        }
        else if(depart == returning){
            alert("From date should be less than To date")
            
        }
        else{
            flag+=1;
        }
        if (adults>0) {
            flag+=1;
        }
        else{
            alert("adults value should not be negative or zero");
        }
        if (children>=0 || children==null) {
            flag+=1;
        }
        else{
            alert("children value should not be negative");
        }
        if (flag==5) {
        }
        
    }
</script>
</body>

</html>
<?php 

$error_message = "";$success_message = "";

// Register user
if(isset($_POST['saves'])){

   $mode = trim($_POST['mode']);
   $username = $_COOKIE['username'];
   $from = trim($_POST['from']);
   $to = trim($_POST['to']);
   $depart = date('Y-m-d',strtotime($_POST['depart']));
   $return = date('Y-m-d',strtotime($_POST['return']));
   $adult = trim($_POST['adult']);
   $child = trim($_POST['child']);
   $class = trim($_POST['class1']);
   $con = mysqli_connect('localhost', 'root', '', 'login');

   $isValid = true;
 

     $insertSQL = "INSERT INTO booking_details (mode,from_,to_,depart,return_,adult,children,class,username) values(?,?,?,?,?,?,?,?,?)";
     $stmt = $con->prepare($insertSQL);
     $stmt->bind_param("sssssiiss",$mode,$from,$to,$depart,$return,$adult,$child,$class,$username);
     $stmt->execute();
     $stmt->close();
}

?>