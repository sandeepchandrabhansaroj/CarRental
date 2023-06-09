<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
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
                ?>

<?php
$res2="SELECT rental.Rid,rental.cid,rental.Vehicle_id,rental.Rdate,car.Model,car.Ctype,customer.Fname FROM rental INNER JOIN car ON rental.Vehicle_id = car.Vehicle_id INNER JOIN customer ON rental.cid=customer.Cid";
	$result2=mysqli_query($connection,$res2);
	echo "<h1><center>Active and Scheduled Rentals</h1><br><br>";
?>
<table class="table table-hover table-bordered" border='1'>
	<thead><tr>
<th>Rid</th>
<th>Cid</th>
<th>Fname</th>
<th>Vehicle id</th>
<th>Start Date</th>
<th>Model</th>
<th>Type</th>
</tr>
</thead>
<tbody>


<?php
if (mysqli_num_rows($result2) > 0) {
while($row2 = mysqli_fetch_assoc($result2))
{echo "<tr class='warning'>";
echo "<td>" . $row2["Rid"] . "</td>";
echo "<td>" . $row2["cid"] . "</td>";
echo "<td>" . $row2["Fname"] . "</td>";
echo "<td>" . $row2["Vehicle_id"] . "</td>";
echo "<td>" . $row2["Rdate"] . "</td>";
echo "<td>" . $row2["Model"] . "</td>";
echo "<td>" . $row2["Ctype"] . "</td>";
echo "</tr>";
}
}
?></tbody>
</table>

   </body>
</html>
