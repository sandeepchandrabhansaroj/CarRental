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
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <!-- or -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

</head>
<body class="container jumbotron animated fadeInLeft">
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "";
	$database_name = "carrental";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
	$res="SELECT * FROM carrental.customer";
	$result=mysqli_query($connection,$res);
	echo "<h1><center>Customers</h1><br><br>";
?>
<div class="container">
<table class="table table-hover table-bordered">
<thead>
<tr>
    <th>Cid</th>    
<th>FName</th>
<th>Lname</th>
<th>Age</th>
<th>Mobile</th>
<th>Dl No.</th>
</tr>
</thead>
<tbody>
<?php
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{
echo "<tr class='warning'>";
echo "<td>" .'   '. $row["Cid"] . "</td>";
echo "<td>" . $row["Fname"] . "</td>";
echo "<td>" . $row["Lname"] . "</td>";
echo "<td>" . $row["Age"] . "</td>";
echo "<td>" . $row["Mobile"] . "</td>";
echo "<td>" . $row["Dno"] . "</td>";
echo "</tr>";
}
}
?>
</tbody>
</table>
</div>
</body>
</html>


