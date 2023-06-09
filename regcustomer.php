<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "";
	$database_name = "carrental";
	$salt = 'XyZzy12*_';
	$valid=1;
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
	
$Fname=$_POST["fname"];
$Lname=$_POST["lname"];
$AGE=$_POST["age"];
$Mobile=$_POST["mobile"];
$Dno=$_POST["dno"];

$user=$_POST["username"];
if(empty($_POST['pass'])) {
$valid = 0;
$error_message = "Password  can not be empty";
} 
else {
$len = strlen($_POST['pass']);
if($_POST['pass'] != $_POST['pass1'])
{
	$valid = 0;
$error_message = "Re-entered Password does not match with the password";
}
else if($len < 7 ) {
$valid = 0;
$error_message = "Password must be at least 6 characters in long";
} else {
$count_number = preg_match_all( "/[0-9]/", $_POST['pass'] );
$count_alphabet = preg_match_all( "/[A-Za-z]/", $_POST['pass'] );
if( $count_number == 0 || $count_alphabet == 0 ) {
$valid = 0;
$error_message = "password must contain at least 1 number and 1 alphabetic character";
}
}
}
if($valid)
{
	
	$passh = hash('md5', $salt.$_POST['pass']);
	$result="INSERT INTO customer(Fname,Lname,AGE,Mobile,Dno,password,username) VALUES('$Fname','$Lname','$AGE','$Mobile','$Dno','$passh','$user')";
	mysqli_query($connection,$result) or die(mysqli_error($connection));
	echo "<script>alert('Successfully Registered! Head to login!');
	location.href = 'login.html';
	</script>";
	session_start();
	
?>
<?php	
            $result1="SELECT Cid,username FROM customer WHERE Dno='$Dno'";
	$result2=mysqli_query($connection,$result1);
	while($row = mysqli_fetch_assoc($result2))
{
	//echo "<h3>Customer ID is :</h3>".$row["Cid"];
	//$_SESSION['id'] = $row['Cid'];
	//$_SESSION['user'] = $row['username'];
	//echo'<a href="login.html"> <button>Head to Login</button></a>'."";
	//echo $_SESSION['id']."  ".$_SESSION['user'];
}

}
else
{
	$err = $error_message;
	echo "<script>
	var err = '$err';
	alert(err);
	location.href='signupcus.html';
	</script>";
}
?>


</body>
</html>
