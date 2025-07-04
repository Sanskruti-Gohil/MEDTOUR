<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>MedTour-Appointment Delete Details</title>
     <!-- <link rel="stylesheet" type="text/css" href="css.css" /> -->
     <style>
        .button {
          background-color: red;
          color: white;
          padding: 10px 20px;
          text-align: center;
          border: solid;
          border-color: black;
          border-radius: 6px;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          font-weight: bold;
          margin: 4px 2px;
          cursor: pointer;
        }  

        input {
          padding-left: 30px;
          padding-right: 20px;
          padding-top: 8px;
          padding-bottom: 8px;
          border-radius: 10px;
          border: solid;
        }
  
        td{
          font-weight: bold;
          color: black;
          font-size: 20px;
        }

        .back{
            color: white;
            background-color: black;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 20px;
            border: solid;
            border-color: black;
            border-radius: 6px;
            margin: 4px 2px;
            cursor: pointer;
            text-decoration: none;
        }
  </style>

<script type="text/javascript">
        function preventBack() 
   {
   window.history.forward();

   }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>  

</head>

<body>
<center>

<!-- <marquee><h1 class="impact"style="color:black;"><b><i>MEDTOUR</i></b></h1></marquee>

<h1 class="impact" style="color:black;"><b>HOSPITALS INFORMATION</b></h1>
<h1 class="impact" style="color:black;"><b>Show Data</b></h1> -->
<h1 class="impact" style="color: black; text-align: center; margin: 10px">
        <b>Appointment Delete Informations</b>
      </h1>

      <form method="Post" action="AppointmentsDeleteSave.php">

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">



<?php

$PatientId=$_REQUEST['aid'];
$con=mysql_connect("localhost","root","");
if($con)
{
    //echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("medtour");

$sql="select * from `appointments` where `aid`='$PatientId'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_assoc($result))
{
    $D1=$row['aid'];
    $D2=$row['finm'];
    $D3=$row['lnm'];
    $D4=$row['addr1'];
    $D5=$row['addr2'];
    $D6=$row['city'];
    $D7=$row['contactno'];
    $D8=$row['appdt'];
    $D9=$row['apptm'];
    $D10=$row['appstus'];
    
}


?>

<tr>
<td>Appointment Id :</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>

<tr>
<td>First Name :</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>" readonly /></td>
</tr>


<tr>
<td>Last Name :</td>
<td><input type="text" name="D3" value="<?php echo $D3;?>" readonly /></td>
</tr>


<tr>
<td>Address 1 :</td>
<td><input type="text" name="D4" value="<?php echo $D4;?>" readonly /></td>
</tr>



<tr>
<td>Address 2 :</td>
<td><input type="text" name="D5" value="<?php echo $D5;?>" readonly /></td>
</tr>

<tr>
<td>City :</td>
<td><input type="text" name="D6" value="<?php echo $D6;?>" readonly /></td>
</tr>


<tr>
<td>Contact No. :</td>
<td><input type="text" name="D7" value="<?php echo $D7;?>" readonly /></td>
</tr>


<tr>
<td>Appointment Date :</td>
<td><input type="date" name="D8" value="<?php echo $D8;?>" readonly /></td>
</tr>

<tr>
<td>Appointment Time :</td>
<td><input type="time" name="D9" value="<?php echo $D9;?>" readonly /></td>
</tr>

<tr>
<td>Appointment Status :</td>
<td><input type="text" name="D10" value="<?php echo $D10;?>" readonly /></td>
</tr>

<tr>
<td>
                    <a href="AppointmentsDelete.php" class="back">Back</a>
                </td>
<td>
<input class="button" type="submit" name="Delete" value="Delete"/></td>
</tr>
	
	
	</table>
</form>

<?php
    
    mysql_close($con);
?>
</center>
</body>
</html>