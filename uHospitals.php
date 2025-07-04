
<?php

if(isset($_POST['insert']))
{
$con=mysqli_connect('localhost','root','','medtour');
    if($con)
    {
        // echo "Connected";
    }

    $hcode=$_POST['hcode'];
    $hname=$_POST['hname'];
    $haddr=$_POST['haddr'];
    $hcountry=$_POST['hcountry'];
    $hcont=$_POST['hcont'];
    $hfac=$_POST['fac'];
    $hfacs=implode(", ",$hfac);
    $hcontnm=$_POST['hcontnm'];
    $hcontper=$_POST['hcontper'];
    
    // echo $hcode,$hname,$hcont,$hfacs;
    
    $sql="insert into `hospitals` values ('$hcode','$hname','$haddr','$hcountry',$hcont,'$hfacs','$hcontnm',$hcontper)";
    
    if(mysqli_query($con,$sql))
    {
        // echo 'Insert Successful';
        echo "<script>alert('Hospital Inserted Successfully');</script>";
        echo ("<script LANGUAGE='JavaScript'>window.location.href='uHospitalsView.php';</script>");  
    }
    else
    {
        echo "<script>alert('Hospital Not Inserted Successfully');</script>";
        echo ("<script LANGUAGE='JavaScript'>window.location.href='uHospitals.html';</script>");
    }
    
}
mysqli_close($con);
?>