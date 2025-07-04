<?php

if(isset ($_POST['Delete']))
{
     
    $Hpcode=$_POST['D1'];
    $Hpaid=$_POST['D2'];
    $Hhcode=$_POST['D3'];
    $Hbkfrom=$_POST['D4'];
    $Hbkto=$_POST['D5'];
   
    
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="delete from `hotelbookings` where `paid`='$Hpaid'"; 
if(mysql_query($sql,$con))

{
// echo "Record Deleted Successfully";
echo "<script>alert('Record Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='HotelBookingsDelete.php';</script>");
}
else
{
    // echo"Record Not Deleted";
    echo "<script>alert('Record not Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");

    
}
}
mysql_close($con);
//header("location:HotelbookingsDelete.php");


?>