<?php

session_start();
$email = $_SESSION['UEmail'];
if(!isset($_SESSION['UEmail']))
{
    // header("location:index.html");
}
if(isset($_SESSION['UEmail']))
{
    $conn = mysqli_connect('localhost','root','','medtour');
    session_unset();
    session_destroy();
    $yes=confirm('Are you sure you want to Logout ?');
    if($yes==1)
    {
        header("location:index.html");
    }
    else if($yes==0)
    {
        header("location:index2.html");
    }
}

?>