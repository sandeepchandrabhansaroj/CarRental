<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "";
	$database_name = "carrental";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
	
$del=$_POST["delete"];

			$res="delete from chauffeur where Did='$del'";
	$result=mysqli_query($connection,$res);
        echo $del;
	echo "<script>
	var did = '$del';
	alert('Driver Id '+ did + ' is deleted');
	location.href = 'chauffeur.php';
	</script>";
?>