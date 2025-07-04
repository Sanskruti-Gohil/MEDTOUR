<?php

if (isset($_POST['delete'])) {
    $hcode = $_POST['hcode'];
    $hname = $_POST['hname'];
    $haddr = $_POST['haddr'];
    $hcountry = $_POST['hcountry'];
    $hcont = $_POST['hcont'];
    $hfac = $_POST['fac'];
    $hfacs = implode(", ", $hfac);
    $hcontnm = $_POST['hcontnm'];
    $hcontper = $_POST['hcontper'];

    //  echo $hcode, $hname, $hcont, $hfacs;

    $con = mysql_connect("localhost", "root", "");
    if ($con) {
        // echo "Connected to MySQL" . "<br/>";
    }
    mysql_select_db("medtour");
    $sql = "DELETE FROM `hospitals` WHERE `HCode`='$hcode'";
    if (mysql_query($sql, $con)) {
        // echo 'Record Deleted Successfully';
        echo "<script>alert('Record Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='HospitalsDelete.php';</script>");
    } else {
        // echo 'Record Not Deleted Successfully';
        echo "<script>alert('Record not Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");
    }
}
mysql_close($con);
//header("location:HospitalsDelete.php");
?>