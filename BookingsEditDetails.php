<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>MedTour-Doctor Update Details</title>
     <!-- <link rel="stylesheet" type="text/css" href="css.css" /> -->
     <style>
        .button {
          background-color: green;
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
      function validate()
      {
        var code=document.bookings.dcode.value;
        var phone=document.doctors.phone.value;
        //document.print(dcode);
        //var upswd=document.doctors.pswd.value;
        //var uname=/^[a-zA-Z ]*$/;
       
        //var unm=document.registration.nm.value.match(nm);
        //var fnm=document.registration.fname.value.match(fname);
        
        
        if(code.length<6 || code.length>8)
        {
            alert("Length of Doctor Code should be 6 characters!");
            document.doctors.code.focus();
            return false;
        }
        
          
        else if(phone.length<10 || phone.length > 10)
        {
            alert("Please Enter Mobile Number of at least 10 digits");
            document.doctors.phone.focus();
            return false;
            
        }
        // else
        // {
        //     alert("Registration Scucees doc swam!!");
        //     return false;
        // }               
      }
    </script>
  
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
        <b>Package Booking Update Information</b>
      </h1>

      <form name="bookings" method="Post" action="BookingsUpdate.php" onsubmit="return validate();">

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php

$Bcode=$_REQUEST['bcode'];
$con=mysql_connect("localhost","root","");
if($con)
{
    // echo "Connected to MySQL"."<br/>";
}
else
{
    // echo "not connected";
}
mysql_select_db("medtour");

$sql="SELECT * FROM `bookings` WHERE `bcode` = '$Bcode'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_assoc($result))
{
    $D1=$row['date'];
    $D2=$row['bcode'];
    $D3=$row['fnm'];
    $D4=$row['phno'];
    $D5=$row['altno'];
    $D6=$row['email'];
    $D7=$row['relation'];
    $D8=$row['id'];
    $D9=$row['ppltravel'];
    $D10=$row['pcode'];
    $D11=$row['gndr'];
    $D12=$row['tmperiod'];
    $D13=$row['chindate'];
    $D14=$row['choutdate'];
    
}


?>

<tr>
<td>Date :</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>

<tr>
<td>Booking Code :</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>


<tr>
<td>Full Name :</td>
<td><input type="text" name="D3" value="<?php echo $D3;?>"/></td>
</tr>


<tr>
<td>Phone Number :</td>
<td><input type="text" name="D4" value="<?php echo $D4;?>"/></td>
</tr>



<tr>
<td>Alternate Number :</td>
<td><input type="text" name="D5" value="<?php echo $D5;?>"/></td>
</tr>

<tr>
<td>Email :</td>
<td><input type="text" name="D6" value="<?php echo $D6;?>"/></td>
</tr>


<tr>
<td>Relationship with patient :</td>
<td><input type="text" name="D7" value="<?php echo $D7;?>"/></td>
</tr>


<tr>
<td>ID Proof :</td>
<td><input type="text" name="D8" value="<?php echo $D8;?>"/></td>
</tr>

<tr>
<td>Number of people travelling :</td>
<td><input type="text" name="D9" value="<?php echo $D9;?>"/></td>
</tr>

<tr>
<td>Package Code :</td>
<td><input type="text" name="D10" value="<?php echo $D10;?>"/></td>
</tr>



<tr>
<td>Gender :</td>
<td><input type="text" name="D11" value="<?php echo $D11;?>"/></td>
</tr>

<tr>
<td>Staying Time Period :</td>
<td><input type="text" name="D12" value="<?php echo $D12;?>"/></td>
</tr>

<tr>
<td>Check-in Date :</td>
<td><input type="text" name="D13" value="<?php echo $D13;?>"/></td>
</tr>

<tr>
<td>Check-out Date :</td>
<td><input type="text" name="D14" value="<?php echo $D14;?>"/></td>
</tr>


<tr>
<td>
  <a href="BookingsEdit.php" class="back">Back</a>
</td>
<td>
<input class="button" type="submit" name="Submit" value="Submit"/>
</td>
</tr>
	
	
	</table>
</form>

<?php
    
    mysql_close($con);
?>
</center>
</body>
</html>
