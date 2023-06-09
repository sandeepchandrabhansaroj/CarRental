<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "";
	$database_name = "carrental";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
 	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
	session_start();
$user=$_POST["username"];
$salt = 'XyZzy12*_';
$pass = hash('md5', $salt.$_POST['pass']);
	$result="SELECT Cid,password,Dno FROM customer WHERE customer.username = '$user'";
	$res = mysqli_query($connection,$result);

	$row = mysqli_fetch_assoc($res);
 $pid=$row["password"];
 $cid = $row["Cid"];
 $dno = $row["Dno"];
if($pid == $pass)
 	{
 		echo 'Successful';
 		
 		$_SESSION['id'] = $cid;
 		$_SESSION['user'] = $user;
 		$_SESSION['dno'] = $dno;
 		//echo 'Value of session '.' is '.$_SESSION['user']."<br>";
 		//echo "Session id is ".$_SESSION['id'];
 		header("Location: cusindex.php");
 	}
 else
 	echo 'Not Successful';
?>

