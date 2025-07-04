<?php

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("medtour");
    // echo "Connected"."</br>";
    
    $Hpcode=$_POST['pcode'];
    $Hpaid=$_POST['paid'];
    $Hhcode=$_POST['HCode'];
    $Hbkfrom=$_POST['bkfrom'];
    $Hbkto=$_POST['bkto'];
    
    
    // echo $Hpcode,$Hhcode,$Hbkto;
    $sql="insert into `hotelbookings` values('$Hpcode','$Hpaid','$Hhcode','$Hbkfrom','$Hbkto')";
    if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Booking successful');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='HotelbookingsView.php';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please try booking again');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.htm';</script>");
    }
}
mysql_close($conn);
?>