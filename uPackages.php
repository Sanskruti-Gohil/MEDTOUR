<?php

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("medtour");
    // echo "Connected"."</br>";
    
    $Pcode=$_POST['pcode'];
    $Hcode=$_POST['hcode'];
    $Dcode=$_POST['dcode'];
    $Preferences=$_POST['preferences'];
    $Pkgdays=$_POST['pkgdays'];
    $Charges=$_POST['chrgs'];
    $Accomodation=$_POST['accomodation'];
    
    // echo $Pcode,$Preferences,$Accomodation;
    $sql="insert into `packages` values('$Pcode','$Hcode','$Dcode','$Preferences',$Pkgdays,$Charges,'$Accomodation')";
     if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Inserted successful');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='uPackagesView.php';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please register again');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='uPackages.html';</script>");
    }
}
mysql_close($conn);


?>