<?php
session_start();
//echo "Session id is ".$_SESSION["id"];
if(isset($_SESSION["user"]))
{
    if($_SESSION["user"] != "admin")
        {
          echo "<script>
          alert('Admin login required!');
          location.href = 'admin-login-cars.html';
          </script>";
          //header("Location: login.html");
        }
    //echo "Session id is ".$_SESSION["id"];
}
else
{
    header("Location: admin-login-cars.html");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <!-- or -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body class="jumbotron container animated fadeInUp">
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "";
	$database_name = "carrental";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
                ?>

<?php

        $res3="select * from history";
	$result3=mysqli_query($connection,$res3);
	echo "<h1><center>History of Bookings</h1><br><br>";
?>
<table class="table table-hover table-bordered">
<thead>
<tr>
<th>RID</th>
<th>Cid</th>
<th>Fname</th>
<th>Vehicle id</th>
<th>License no</th>
<th>Model</th>
<th>Type</th>
<th>Start Date</th>
<th>No of Hours</th>
<th>No of Days</th>

<th>Amount</th>
</tr>
</thead>
<tbody>
<?php
if (mysqli_num_rows($result3) > 0) {
while($row2 = mysqli_fetch_assoc($result3))
{
echo "<tr class='info'>";
echo "<td>" . $row2["Rid"] . "</td>";
echo "<td>" . $row2["cid"] . "</td>";
echo "<td>" . $row2["Fname"] . "</td>";
echo "<td>" . $row2["Vehicle_id"] . "</td>";
echo "<td>" . $row2["License_no"] . "</td>";
echo "<td>" . $row2["Model"] . "</td>";
echo "<td>" . $row2["Ctype"] . "</td>";
echo "<td>" . $row2["Rdate"] . "</td>";
echo "<td>" . $row2["Nohours"] . "</td>";
echo "<td>" . $row2["Nodays"] . "</td>";
echo "<td>" . $row2["amt"] . "</td>";
echo "</tr>";
}
}
?>
</tbody>
</table>