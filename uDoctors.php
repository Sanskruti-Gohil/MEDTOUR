<?php

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("medtour");
    // echo "Connected"."</br>";
    
    $Dcode=$_POST['dcode'];
    $Dname=$_POST['dnm'];
    $Dgndr=$_POST['gndr'];
    $Dspec=$_POST['spec'];
    $Dqua=$_POST['qua'];
    $Dexpr=$_POST['expr'];
    $Drate=$_POST['rate'];
    $Dphone=$_POST['phone'];
    $Dmail=$_POST['email'];
    $Daddr=$_POST['addr'];
    $Dcfs=$_POST['csf'];
    $Dabd=$_POST['abd'];
    $Dcst=$_POST['cst'];
    
    $sql = "INSERT INTO `doctors`(`dcode`, `dname`, `dgndr`, `dspec`, `dqua`, `dexpr`, `drate`, `dphone`, `dmail`, `daddr`, `dcfs`, `dabd`, `dcst`) VALUES ('$Dcode','$Dname','$Dgndr','$Dspec','$Dqua','$Dexpr','$Drate',$Dphone,'$Dmail','$Daddr','$Dcfs','$Dabd','$Dcst')";
    
    // echo $Dcode,$Drate,$Dcst;
//    echo $sql="insert into doctors values('$Dcode','$Dname','$Dgndr','$Dspec','$Dqua',$Dexpr,'$Drate',$Dphone,'$Dmail','$Daddr',$Dcfs,'$Dabd','$Dcst')";
    if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Inserted successful');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='uDoctorsView.php';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please book again');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='uDoctors.html';</script>");
    }
}
mysql_close($conn);
?>