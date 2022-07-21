<?php
$username= $_COOKIE['username'];
$con = mysqli_connect('localhost', 'root', '', 'login');
$stmt = $con->prepare("SELECT * FROM booking WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$rows = $result->fetch_assoc();
$stmt->close(); 
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>Booking History</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    <!-- CSS FOR STYLING THE PAGE -->
   
<style>
#grad1 {
  height: 200px;
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(red, yellow);
}

tr:hover {background-color: coral;}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #04AA6D;
  color: white;
}

body {
  background-image: url('https://source.unsplash.com/twukN12EN7c/1920x1080'); 
}

@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;900&display=swap');


.container  {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  height: 400px;
  width: 1000px;
  background: #f2f2f2;
  overflow: hidden;
  border-radius: 20px;
  cursor: pointer;
  box-shadow: 0 0 20px 8px #d0d0d0;
}

.content {
  position: absolute;
  top: 50%;
  transform: translatey(-50%);
  text-align: justify;
  color: black;
  padding: 40px;
  font-family: 'Merriweather', serif;
}

h1 {
  font-weight: 100;
  text-align: center;
  font-family: "Lucida Console", "Courier New", monospace;
}

h3 {
  font-weight: 300;
}



.container:hover .flap::after {
  transform: translatex(300px);
}

.container:hover .flap::before{
  transform: translatex(-300px);
}
</style>  
</head>
  
<body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand bg-primary" href="#" style="color:white;"><b>RailGo</b></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/Login/Signup/Profile/Profile.php"><b>Home</b></a></li>
      <li><a href="/Login/booking.php"><b>Booking</b></a></li>
      <li><a href="/Login/Signup/Profile/table.php"><b>Booking History</b></a></li>
      <li><a href="/Login/Wallet.php"><b>Wallet</b></a></li>
      <li><a href="/Login/Signup/Terms.html" target="_blank" ><b>Terms</b></a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
</div>

    <div id="grad1 "></div>
    <div class="container">
  <div class="content">  
   
    <h1>Welcome, <?php echo $rows['username'];?></h1>
        <h1>Booking History</h1>
        <table id="example" class="table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Transaction ID</th>
                <th>PNR</th>
                <th>TRAIN NUMBER</th>
                <th>FROM</th>
                <th>TO</th>
                <th>DATE OF JOURNEY</th>
                <th>RESERVATION STATUS</th>
                <th>DATE OF BOOKING</th>
            </tr>
        </thead>
        <tbody>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['transaction_id'];?></td>
                <td><?php echo $rows['PNR'];?></td>
                <td><?php echo $rows['train_no'];?></td>
                <td><?php echo $rows['from'];?></td>
                <td><?php echo $rows['to'];?></td>
                <td><?php echo $rows['date_of_j'];?></td>
                <td><?php echo $rows['reservation_status'];?></td>
                <td><?php echo $rows['date_of_b'];?></td>
            </tr>

        </tbody>
            <?php
                }
             ?>
 
        </table>
        <br>
        <button class="login100-form-btn" onclick="alertt()">new reservation</button>
    <button class="login100-form-btn" onclick="alertt()">edit current reservation</button>
   
        </div>
  <div class="flap"></div>
</div>
    <br>
    
  
</body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script type = "text/javascript" src = "https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type = "text/javascript">
</script>
<script>
    function alertt(){
        alert("page under construction");
    }
</script>
<!--===============================================================================================-->  
    <script src="vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor2/bootstrap/js/popper.js"></script>
    <script src="vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor2/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor2/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
    <script>
        $('.js-pscroll').each(function(){
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function(){
                ps.update();
            })

            $(this).on('ps-x-reach-start', function(){
                $(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
            });

            $(this).on('ps-scroll-x', function(){
                $(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
            });

        });

        
        
        
    </script>
<!--===============================================================================================-->
    <script src="js2/main.js"></script>

</html>