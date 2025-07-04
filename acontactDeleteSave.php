<?php

if(isset ($_POST['Delete']))
{
     
   
    $cname=$_POST['D1'];
    $cemail=$_POST['D2'];
    $csubject=$_POST['D3'];
    $cmsg=$_POST['D4'];
  
  
   echo $cname,$cmsg;  
    
$con=mysql_connect("localhost","root","","medtour");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="delete from `contact` where `email`='$cemail'"; 
if(mysql_query($sql,$con))

{
    // echo "Record Deleted";
    echo "<script> window.alert('Record Deleted');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='acontactDelete.php';</script>");
}
else
{
    // echo"Record Not Deleted";
    echo "<script> window.alert('Record not Deleted');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='acontact.html';</script>");
    
}
}
mysql_close($con);
//header("location:ContactUsDelete.php");
?>