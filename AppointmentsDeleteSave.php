<?php

if(isset ($_POST['Delete']))
{   
    $Apaid=$_POST['D1'];
    $Afinm=$_POST['D2'];
    $Alnm=$_POST['D3'];
    $Aaddr1=$_POST['D4'];
    $Aaddr2=$_POST['D5'];
    $Acity=$_POST['D6'];
    $Acontactno=$_POST['D7'];
    $Aappdt=$_POST['D8'];
    $Aapptm=$_POST['D9'];
    $Aappstus=$_POST['D10'];  
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="delete from `appointments` where `aid`='$Apaid'"; 
if((mysql_query($sql,$con)))
{
    // echo"Record Not Deleted";
    echo "<script>alert('Record Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='AppointmentsDelete.php';</script>");

// echo "Record Deleted Successfully";
// header("location:AppointmentsView.php"); 
}
else
{
    // echo"Record Not Deleted";
    echo "<script>alert('Record not Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");

    
}
}
mysql_close($con);
//header("location:AppointmentsDelete.php");


?>