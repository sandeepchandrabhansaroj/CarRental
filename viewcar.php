<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<head>
        <title>Car Rental </title>
        <!--<link href="pstyles.css" rel="stylesheet" type="text/css" /> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body class="container jumbotron">
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "";
	$database_name = "carrental";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
	$Ctype=$_POST["Ctype"];

			$res="SELECT Vehicle_id,License_no,Model,Year,Drate AS Daily_Rate, Wrate AS Weekly_Rate FROM car WHERE Ctype='$Ctype'";
	$result=mysqli_query($connection,$res);
	echo "<h1><center>".$Ctype."&nbsp;Cars</h1><br><br>";
?>
<center>
<table class="table table-hover table-bordered" border='1'>
	<thead><tr>
<th>Vehicle ID</th>
<th>License No</th>
<th>Model</th>
<th>Year</th>
<th>Hourly Rate(Rs)</th>
<th>Daily Rate(Rs)</th>
</tr>
</thead>
<tbody><?php
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{
echo "<tr class='warning'>";
echo "<td>" . $row["Vehicle_id"] . "</td>";
echo "<td>" . $row["License_no"] . "</td>";
echo "<td>" . $row["Model"] . "</td>";
echo "<td>" . $row["Year"] . "</td>";
echo "<td>" . $row["Daily_Rate"] . "</td>";
echo "<td>" . $row["Weekly_Rate"] . "</td>";
echo "</tr>";
}
}
?>
</tbody>
</table>
</body>
</html>

