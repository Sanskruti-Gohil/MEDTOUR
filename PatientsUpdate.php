<?php

if(isset ($_POST['Submit']))
{
     
    
    $Ppaid=$_POST['D1'];
    $Pnm=$_POST['D2'];
    $Page=$_POST['D3'];
    $Pgndr=$_POST['D4'];
    $Pdcode=$_POST['D5'];
    $Pill=$_POST['D6'];
    $Preffby=$_POST['D7'];
    
//    echo $Ppaid,$Pgndr,$Preffby;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="update `patients` set `nm`='$Pnm',`age`=$Page,`gndr`='$Pgndr',`dcode`='$Pdcode',`ill`='$Pill',`reffby`='$Preffby' where `paid`='$Ppaid'"; 

if(mysql_query($sql,$con))

{

// echo "Record Updated Successfully";
echo "<script>alert('Record Updated');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='PatientsEdit.php';</script>");
}
else
{
    // echo"Record Not Updated";
    echo "<script>alert('Record not Updated');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");
    
}
}
mysql_close($con);
//header("location:PatientsEdit.php");


?>