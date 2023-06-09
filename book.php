
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

<?php
    if(isset($_POST["book"]))
    {
    $database_host = "localhost";
    $database_user = "root";
    $database_pass = "";
    $database_name = "carrental";
    $connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
    if(mysqli_connect_errno()){
        die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }

//$Cid=$_POST["cbid"];
$Cid=$_SESSION["id"];
//$Dno=$_POST["Dno"];
$Sdate=$_POST["Sdate"];
$Ctype=$_POST["Ctype"];
$Vehicle_id=$_POST["Vehicleid"];
$Nodays=$_POST["Days"];
$Nohours=$_POST["Hours"];
$radio = $_POST["r1"];
$Dno = $_SESSION["dno"];

    $dr = "SELECT * FROM chauffeur";
    $p = mysqli_query($connection,$dr);

    if(mysqli_num_rows($p) > 0)
    {
      $res="INSERT INTO rental (Rid, cid, Rdate,Ctype, Dno, Vehicle_id, D_allot) VALUES (NULL, '$Cid', '$Sdate', '$Ctype', '$Dno','$Vehicle_id','$radio');";

    $result=mysqli_query($connection,$res) or die(mysqli_error($connection));
        $res1="INSERT INTO crdata (Cid,Vehicle_id,Nohours,Nodays) VALUES ($Cid,'$Vehicle_id','$Nohours','$Nodays')";
    $result=mysqli_query($connection,$res1) or die(mysqli_error($connection));

    echo "<script>alert('Rental has been added!')</script>";
    }
    else
    {
      echo "<script>alert('No Drivers Available!')</script>";
    }
                                                                                                                
}

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Car Rental </title>
        <!--<link href="styles.css" rel="stylesheet" type="text/css" /> -->
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
        margin-left: 320px;
       }
       .p{
        margin-left: 150px;
        width: 200px;
       }
       .op
       {
        width: 400px;
        text-align: center;
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
                  
                 
                    </button>   <a class="navbar-brand" href="cusindex.php">Welcome to Carrental</a> </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>                  
                    </ul>
                    
                </div>
            
            
            </div>
           </nav>
           <br><br><br>
        
	<div class="animated fadeInUp">
<div class="len">
    <h1 style="text-align: center;"> BOOK A CAR </h1>
    <form method="post" >

<!--<div class="form-group">
        <label>Enter Driving License No: </label>
<input type="text" class="form-control" name="Dno"/></div>-->

<div class="form-group">
        <label>Enter date yyyy-mm-dd: </label>
<input type="date" class="form-control" name="Sdate"/></div>

<div class="form-group">
        <label>Select Car type: </label>
<select class="form-control" name="Ctype">

<option>Compact</option>
<option>Medium</option>
<option>Large</option>
<option>SUV</option>
<option>Van</option>
<option>Truck</option>
<option>Special Royal Cars</option>
</select></div>

<div class="form-group">
        <label>No of Hours : </label>
<select class="form-control" name="Hours">
<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
</select></div>

<div class="form-group">
        <label>No of days : </label>
<select class="form-control" name="Days">

<option>0</option><option>1</option><option>2</option><option>3</option>
</select></div>  

<div class="form-group">
        <label>Enter Vehicle id: </label>
<input type="text" class="form-control" name="Vehicleid"/></div>

<div class="form-group">
    <label style="padding-right:20px">Want a Driver?    </label>
    <label class="radio-inline"><input type="radio" name="r1" value="yes">Yes</label>
<label class="radio-inline"><input type="radio" name="r1" value="no">No</label>
</div>

<br>
<button class="btn btn-warning p" type="submit" name="book">BOOK</button>
</form>	

    
<br>
    <form action="available1.php" method="post" >
        <br>
    <button class="btn btn-warning p" type="submit" name="check">CHECK AVAILABILITY</button>
                </form>
                <h2 style="text-align: center"> VIEW ACTIVE & SCHEDULED RENTALS </h2>
<form action="viewrental.php" method="post" >
		
        <br>
		<button class="btn btn-warning p" type="submit" name="submit1">VIEW</button>
</form>
    </div>	
	<br><br>
	
	<div class="rightContent">
<SCRIPT LANGUAGE="JavaScript">

var num=1
img1 = new Image ()
img1.src = "images/1.jpg"
img2 = new Image ()
img2.src = "images/2.jpg"
img3 = new Image ()
img3.src = "images/3.jpg"
img4 = new Image ()
img4.src = "images/4.jpg" 
img5 = new Image ()
img5.src = "images/5.jpeg" 
img6 = new Image ()
img6.src = "images/6.jpg" 

text1 = "MEDIUM"
text2 = "S.U.V"
text3 = "COMPACT"
text4 = "LARGE"
text5 = "TRUCK"
text6 = "VAN"

function slideshowUp()
{
num=num+1
if (num==7)
{num=1}
document.mypic.src=eval("img"+num+".src")
document.nirmit.iname.value=eval("text"+num)
}

function slideshowBack()
{
num=num-1
if (num==0)
{num=6}
document.mypic.src=eval("img"+num+".src")
document.nirmit.iname.value=eval("text"+num)
}

</SCRIPT>
<!-- The Image and Form Codes are Below --> 
<CENTER>
<IMG SRC="images/1.jpg" NAME="mypic" BORDER=0 HEIGHT="380" WIDTH="500"/>
<br>
<FORM NAME="nirmit">
    <br>
<INPUT class="form-control op" TYPE="text" WIDTH="100" NAME="iname" VALUE="Medium"/>
<br>
</FORM><A HREF="JavaScript:slideshowBack()"> Back</A>    <A HREF="JavaScript:slideshowUp()"> Next</A> 
<br><br>


	</div>
	</div>
	</body>
	</html>