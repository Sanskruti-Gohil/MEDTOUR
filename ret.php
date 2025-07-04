<?php
if(isset($_POST['sub']))
{
$conn = mysqli_connect('localhost', 'root', '', 'medtour');
if (!$conn) {
    echo "Failed to connect to database";
}
session_start();
$email = $_SESSION['UEmail'];
$pass=$_POST['pwd'];
    $repass=$_POST['repwd'];
    $password = md5($pass);
    $sql = "UPDATE `registration` SET `UPass`='$password' WHERE `UEmail` = '$email'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        session_unset();
        session_destroy();
        echo "<SCRIPT>
        alert('Password Reset successfully')
        window.location.replace('index.html');</SCRIPT>";
        
    }
    else
    {
        session_unset();
        session_destroy();
        echo "<SCRIPT>
        alert('Unable to change password')
        window.location.replace('index.html');</SCRIPT>";
    }
}
?>