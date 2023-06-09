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
        <title>Car Rental </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

       <!--jQuery library-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

       <!--Latest compiled and minified JavaScript-->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="styles.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
      <nav class="nav navbar-nav navbar-inverse navbar-fixed-top">
            
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
        <marquee><h3>Welcome to Car Rental Management.</h3></marquee>


		 <div id="container">
  <br class="clearfloat" />
  <!-- begin #header -->
  <div id="header">

    <div id="banner_image">
        <center>
        <div class="container">
          <div class = "headingt">
            <div class="banner_content">
                <p style="font-family: Comic Sans MS;color:Grey;font-size:35px;	font-style:italic,bold;background-color: rgba(0,0,0,0.5);
                    max-width: 450px;
                    padding: 30px 20px;"> Car Rentals </p>
            </div>
          </div>
        </div>
        </center>
        </div>

  <div class="menu">
  	<ul>
      <li style="padding-right: 170px" id="active"><a href="adminindex.php">Home</a></li>
      
    	<li style="padding-right: 170px"><a href="viewcustomer.php">Customers</a></li>
    <li style="padding-right: 170px"><a href="chauffeur.php">Drivers</a></li>
        <li style="padding-right: 170px"><a href="cars.php">Cars</a></li>
        <li > <a href="report1.php">Report</a></li>

		 </ul>
  </div>
  </div>
  <!-- end #header -->

    <br class="clearfloat" />
	<!-- begin #footer -->
  <br><br><  <div id="footer">
    
    </div>
    <!-- end #footer -->
  </div>
<!-- end #container -->
 

</body>
</html>
