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
<html>
<!--
Add and view cars, Update rates
-->
    <head>
        <title>Car Rental </title>
        <!--<link href="pstyles.css" rel="stylesheet" type="text/css" /> -->
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
       body{
        color: white;
          background-image:url("451.jpg");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center;
          background-size: cover;
        }

       .rightContent{

        width: 500px;
        margin-left: 300px;
       }

.p{
        margin-left: 150px;
        width: 200px;
       }

.len{
        width: 500px;
        margin-left: 60px;
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
           <br><br>
     
    
    <div class="animated fadeInUp">
      <div class="container">
      
                      <div class="rightContent">

                      <form action="registercar.php" method="post">
            <h1 style="margin-left: 150px">ADD CAR</h1><br><br>
        

         <div class="form-group">

             <label>License No:</label> <input class="form-control" type="text" name="lno"/></div>

<div class="form-group">
<label>Model:</label> <input class="form-control" type="text" name="model"/></div>
  
  <div class="form-group">
<label>Year:</label> <input  class="form-control" type="date" name="year"/></div>

<div class="form-group">
<label>Car Type: </label><select  class="form-control" name="Cartype">
<option>Compact</option>
<option>Medium</option>
<option>Large</option>
<option>SUV</option>
<option>Van</option>
<option>Truck</option>
<option>Special Royal Cars</option></select></div>
<br><br>
    <button  class="form-control btn btn-warning p" type="submit" name="submit" >Submit</button>
    
</form>

    </div>  
            </div>  
    
<br>
    <hr>
    <br>
    
    <div class="rightContent">
    <h1 class="len"> VIEW CARS & RATES</h1><br><br>
    <form action="viewcar.php" method="post">
    <label>Select Car type to view:</label> <div class="form-group">
    <select  class="form-control" name="Ctype">
<option>Compact</option>
<option>Medium</option>
<option>Large</option>
<option>SUV</option>
<option>Van</option>
<option>Truck</option>
<option>Special Royal Cars</option></select><br><br></div>
<button  class="form-control btn btn-warning p" type="submit" name="submit1" value="View">Submit</button>
    </form>


</div>
<br><br><br>
    <hr>
    <br>
<div class="rightContent">
  
<h1 class="len"> UPDATE RENTAL RATES </h1>
<br>
<form action="update.php" method="post">
    <label>Select Car type to update: </label><select class="form-control" name = "Ctype"> 
        <option>Select</option>
        <option>Compact</option>
<option>Medium</option>
<option>Large</option>
<option>SUV</option>
<option>Van</option>
<option>Truck</option>
<option>Special Royal Cars</option>
</select><br>
       <div class="form-group">
<label> Select Vehicle Id to update: </label>
 <input class="form-control" type="text" name = "vid"/></div>

<div class="form-group">
<label>Hourly Rate:</label> <input class="form-control" type="text" name="udrate"/></div>
<div class="form-group">
<label>Daily Rate:</label> <input class="form-control" type="text" name="uwrate"/></div>
<br> <br> 
<button  class="form-control btn btn-warning p" type="submit" name="submit1" value="Update">Submit</button>
<br>
    </div>
  <br><br>
  <hr>
    <br>
</form> 
</div>
    </body>
    </html>