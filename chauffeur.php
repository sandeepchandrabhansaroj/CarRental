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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html >
    <head>
        <title>Car Rental </title>
        <!-- <link href="pstyles.css" rel="stylesheet" type="text/css" /> -->
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
     <style>
       .len{
        width: 500px;
        margin-left: 300px;
       }
       .p{
        margin-left: 150px;
        width: 200px;
       }
       body{
        background-image:url("60.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
  color: white;
       }
     </style>
    </head>
    <body class="container">
        <nav class="nav navbar-nav navbar-inverse navbar-fixed-top animated fadeInDown">
            
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-target="#mynavbar" data-toggle="collapse" > 
                        <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                  
                 
                    </button>   <a class="navbar-brand" href="adminindex.php">Welcome to Carrental</a> </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>                  
                    </ul>
                    
                </div>
            
            
            </div>
           </nav>
           <br><br><br><br>
           <div class="animated fadeInUp">
	<div class="len">
    <h1 style="text-align: center;"> ADD DRIVERS </h1>
    <form action="regchauffeur.php" method="post">
      <div class="form-group">
        <label>First Name: </label>
<input type="text" class="form-control" name="fname"/></div>

<div class="form-group">
        <label>Last name: </label>
<input type="text" class="form-control" name="lname"/></div>

<div class="form-group">
        <label>Age: </label>
<input type="text" class="form-control" name="age"/></div>

<div class="form-group">
        <label>Mobile: </label>
<input type="text" class="form-control" name="mobile"/></div>

<div class="form-group">
        <label>Driving License No: </label>
<input type="text" class="form-control" name="dlno"/></div>
<br>
<button class="btn btn-warning p" type="submit" name="submit">ADD</button>
</form>
    </div>	
    <br>
    <hr>
		<br>
	<div class="len">
    <h1 style="text-align: center;"> VIEW DRIVERS </h1>
	  <form action="viewchauffeur.php" method="post" >
      <br>
        <button type="submit" class="p btn btn-warning">VIEW</button>
	
            </form>
            
        </div>
        <br>
        <hr>
        <br>
	 <div class="len">   
        	<form action="delchauffeur.php" method="post" >
        <h1 style="text-align: center;"> DELETE  DRIVER</h1>
        <div class="form-group">
        <label>Enter Driver ID: </label>
<input class="form-control" type="text" name="delete"/></div>
  <br>
        <button class="p btn btn-warning" type="submit" name="submit">DELETE</button>
	</form></b>
         </div>
       </div>
    <br><br>
	</body>
	</html>