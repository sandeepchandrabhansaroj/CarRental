<?php
	
$pass=$_POST["pass"];
$user=$_POST["username"];

if($user == "admin" && $pass == "admin")
 	{
 		//echo 'Successful';
 		session_start();
 		$_SESSION['user'] = $user;
 		$_SESSION['id'] = 0;
 		//echo 'Value of session '.' is '.$user;
 		header("Location: adminindex.php");
 	}
 else
 	echo 'Invalid Credentials';
?>