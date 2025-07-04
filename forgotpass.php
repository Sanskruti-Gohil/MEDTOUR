<?php
if(isset($_POST['insert']))
{
$conn = mysqli_connect('localhost', 'root', '', 'medtour');
if (!$conn) {
    echo "Failed to connect to database";
}
$email=$_POST['email'];
$ques=$_POST['select'];
$ans=$_POST['secans'];
$sql="SELECT `UEmail`, `USecQue`, `USecAns` FROM `registration` WHERE `UEmail` = '$email' AND `USecQue` = '$ques' AND `USecAns` = '$ans'";
$result = mysqli_query($conn,$sql);
if(!$result)
{
    echo "<SCRIPT>
    alert('Wrong Credential ')
    window.location.replace('index.html')</script>";
}       
$check = mysqli_fetch_assoc($result);
if($check)
{
    session_start();
    $_SESSION['UEmail'] = $email;
    header("location:rst.html");
}
else{
    echo "<SCRIPT>
    alert('Wrong Credential ')
    window.location.replace('index.html')</script>";  
}



}

?>