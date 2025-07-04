<?php

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("medtour");
    // echo "Connected"."</br>";
    
    $cname=$_POST['nm'];
    $cemail=$_POST['email'];
    $csubject=$_POST['subject'];
    $cmsg=$_POST['msg'];
    
    // echo $cname,$cmsg;
    $sql="insert into `contact` values('$cname','$cemail','$csubject','$cmsg')";
    
     if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Message sent');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.html';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please try again');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='ucontact.html';</script>");
    }
}
mysql_close($conn);

?>