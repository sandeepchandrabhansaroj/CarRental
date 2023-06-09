<?php
session_start();
//echo "Session id is ".$_SESSION["id"];
if(isset($_SESSION["user"]))
{
    if($_SESSION["user"] == "admin")
        {
          header("Location: login.html");
        }
    //echo "Session id is ".$_SESSION["id"];
}
else
{
    header("Location: login.html");
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
        <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <!-- or -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    </head>
    <body>
      <nav class="nav navbar-nav navbar-inverse navbar-fixed-top animated fadeInDown">
            
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-target="#mynavbar" data-toggle="collapse" > 
                        <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                  
                 
                    </button>   <a class="navbar-brand" href="cusindex.php">Welcome to Carrental</a> </div>
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
            <div class="banner_content animated swing">
                <p style="font-family: Comic Sans MS;color:Grey;font-size:35px;	font-style:italic,bold;background-color: rgba(0,0,0,0.5);
                    max-width: 450px;
                    padding: 30px 20px;"> Car Rentals </p> 
					<p style ="font-family: Comic Sans MS;color:black;font-size:15px;	font-style:italic,">
					<br> BOOK YOUR CAR !! <br> TAKE THE FEEL !!<br> CLICK ON RETURN WHILE RETURNING THE CAR</p>
            </div>
          </div>
        </div>
        </center>
        </div>

  <div class="menu animated fadeInUp ">
  	<ul>
    	<li style="padding-right: 320px" id="active"><a href="cusindex.php">Home</a></li>
        <li style="padding-right: 320px"><a href="book.php">Book Car</a></li>
		<li><a href="return1.php" name="enter">Return Car</a></li>
		 </ul>
  </div>
  </div>
  <!-- end #header -->

    <br class="clearfloat" />
	<!-- begin #footer -->
  <br><br>  <div id="footer">
   
    </div>
    <!-- end #footer -->
  </div>
<!-- end #container -->



</body>
</html>
