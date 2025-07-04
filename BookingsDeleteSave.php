<?php

if(isset ($_POST['Delete']))
{
     
   
   $Bdate=$_POST['D1'];
    $Bcode=$_POST['D2'];
    $Bfnm=$_POST['D3'];
    $Bphno=$_POST['D4'];
    $Baltno=$_POST['D5'];
    $Bmail=$_POST['D6'];
    $Brelation=$_POST['D7'];
    $Bid=$_POST['D8'];
    $Bppltravel=$_POST['D9'];
    $Bpcode=$_POST['D10'];
    $Bgndr=$_POST['D11'];
    $Btmperiod=$_POST['D12'];
    $Bchindate=$_POST['D13'];
    $Bchoutdate=$_POST['D14'];
    
    
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="delete from `bookings` where `bcode`='$Bcode'"; 
if (mysql_query($sql, $con)) {
    // echo 'Record Deleted Successfully';
    echo "<script>alert('Record Deleted');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='BookingsDelete.php';</script>");
} else {
    // echo 'Record Not Deleted Successfully';
    echo "<script>alert('Record not Deleted');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");
}
}
mysql_close($con);
// header("location:BookingsDelete.php");
?>