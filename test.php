<?php
session_start();
echo "Session id is ".$_SESSION["id"];
echo "Session id is ".$_SESSION["user"];
/*if(isset($_SESSION["user"]))
{
	if($_SESSION["user"] != "admin")
		header("Location: cusindex.html");
	else
		header("Location: adminindex.html");
	//echo "Session id is ".$_SESSION["id"];
}
else
{
	header("Location: home.html");
}*/
?>