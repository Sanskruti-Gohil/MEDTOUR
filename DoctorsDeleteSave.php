<?php

if(isset ($_POST['Delete']))
{
     
   
    $Dcode=$_POST['D1'];
    $Dname=$_POST['D2'];
    $Dgndr=$_POST['D3'];
    $Dspec=$_POST['D4'];
    $Dqua=$_POST['D5'];
    $Dexpr=$_POST['D6'];
    $Drate=$_POST['D7'];
    $Dphone=$_POST['D8'];
    $Dmail=$_POST['D9'];
    $Daddr=$_POST['D10'];
    $Dcfs=$_POST['D11'];
    $Dabd=$_POST['D12'];
    $Dcst=$_POST['D13'];
    
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="delete from `doctors` where `dcode`='$Dcode'"; 
if(mysql_query($sql,$con))
{
// echo "Record Deleted Successfully";
echo "<script>alert('Record Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='DoctorsDelete.php';</script>");
}
else
{
    // echo"Record Not Deleted";
    echo "<script>alert('Record not Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");  
}
}
mysql_close($con);
// header("location:DoctorsDelete.php");


?>