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
    $database_host = "localhost";
    $database_user = "root";
    $database_pass = "";
    $database_name = "carrental";
    $connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
    if(mysqli_connect_errno()){
        die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
                
    $Vid=$_SESSION["id"];
    $res="select crdata.Cid,crdata.Vehicle_id,crdata.Nohours,crdata.Nodays,car.Drate,car.Wrate from crdata INNER JOIN car where crdata.Cid = '$Vid' AND crdata.Vehicle_id = car.Vehicle_id"; 
        
    $result=mysqli_query($connection,$res);
    /*$row = mysqli_fetch_assoc($result);
        $trf = mysqli_num_fields($result);
        echo $trf;
      */
        
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{
 $cid=$_SESSION["id"];
  $vid=$row["Vehicle_id"];
 $Nhours=$row["Nohours"]; 
 $Ndays=$row["Nodays"]; 
 $hrate=$row["Drate"]; 
 $drate=$row["Wrate"];
 
 $amount = ($Nhours*$hrate) + ($Ndays*$drate);
 $res1 = "INSERT INTO amount(Cid,amt) VALUES('$cid','$amount')";
 $result1=mysqli_query($connection,$res1);
 
}
}
  $res2="insert into history(Rid,cid,Fname,Vehicle_id,License_no,Model,Ctype,Rdate,Nohours,Nodays,amt) SELECT rental.Rid,rental.cid,customer.Fname,rental.Vehicle_id,car.License_no,car.Model,car.Ctype,rental.Rdate,crdata.Nohours,crdata.Nodays,amount.amt FROM rental INNER JOIN car ON rental.Vehicle_id = car.Vehicle_id INNER JOIN customer ON rental.cid=customer.Cid INNER JOIN crdata ON customer.Cid=crdata.Cid INNER JOIN amount on rental.cid = amount.cid AND customer.cid = '$Vid'";
    $result2=mysqli_query($connection,$res2);
     
echo "<script>
var cid = '$cid';
var amount = '$amount';
alert('Total amount for customer id '+ cid +' is : '+amount);
location.href = 'cusindex.php';</script>";
$drop="delete from amount where Cid='$Vid'";
$result3=mysqli_query($connection,$drop);
$drop="delete from crdata where Cid='$Vid'";
$result3=mysqli_query($connection,$drop);
$drop1="delete from rental where Cid='$Vid'";
$result4=mysqli_query($connection,$drop1);
?>

