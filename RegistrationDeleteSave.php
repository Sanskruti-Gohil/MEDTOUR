<?php

if(isset ($_POST['Delete']))
{
     
   
    $usercat=$_POST['D1'];
    $username=$_POST['D2'];
    $password=$_POST['D3'];
    $fullname=$_POST['D4'];
    $address=$_POST['D5'];
    $emailid=$_POST['D6'];
    $mobileno=$_POST['D7'];
   $SecurityQuestion=$_POST['D8'];
    $SecurityAnswer=$_POST['D9'];
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="delete from `registration` where `UEmail`='$emailid'"; 
if(mysql_query($sql,$con))

{

// echo "Record Deleted Successfully";
echo "<script>alert('Record Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window.location.href='RegistrationDelete.php';</script>");
}
else
{
    // echo"Record Not Deleted";
    echo "<script>alert('Record not Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window.location.href='index2.html';</script>");
}
}
mysql_close($con);
// header("location:RegistrationDelete.php");
?>