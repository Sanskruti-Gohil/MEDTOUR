<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>MedTour-Hospital Delete Details</title>
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
    function validate()
    {
      var code=document.hospital.hcode.value;
      var phone=document.hospital.hcont.value;
      var pphone=document.hospital.hcontper.value;
      //document.print(dcode);
      //var upswd=document.doctors.pswd.value;
      //var uname=/^[a-zA-Z ]*$/;
     
      //var unm=document.registration.nm.value.match(nm);
      //var fnm=document.registration.fname.value.match(fname);
      
      
      if(code.length < 6)
      {
          alert("Length of Hospital code should be 6 characters!");
          document.hospital.hcode.focus();
          return false;
      }         
      else if(phone.length < 10 || phone.length > 10)
      {
          alert("Please Enter Mobile Number in at least 10 digits");
          document.hospital.hcont.focus();
          return false;
          
      }
      else if(pphone.length < 10 || pphone.length > 10)
      {
          alert("Please Enter Mobile Number in at least 10 digits");
          document.hospital.hcontper.focus();
          return false;
          
      }
    //   else
    //   {
    //       alert("Inserted Successfully!");
    //       return false;
    //   }               
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
        <b>Hospital Information</b>
      </h1>

<form name="hospital" method="Post" action="HospitalsDeleteSave.php" onsubmit="return validate();">

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">


            <?php

            $hcode = $_REQUEST['HCode'];
            $con = mysql_connect("localhost", "root", "");
            // if($con)
            // {
            //     echo "Connected to MySQL"."<br/>";
            // }
            mysql_selectdb("medtour");

            $sql = "select * from `hospitals` where `HCode`='$hcode'";

            $result = mysql_query($sql, $con);


            while ($row = mysql_fetch_array($result)) {
                $hcode = $row['HCode'];
                $hname = $row['HName'];
                $haddr = $row['HAddr'];
                $country = $row['HCountry'];
                $hcont = $row['HCont'];
                $fac = $row['HFac'];
                $hfacs = explode(", ", $fac);
                $hcontnm = $row['HContPName'];
                $hcontper = $row['HContPer'];
            }

            ?>

            <tr>
                <td>Hospital Code :</td>
                <td><input type="text" name="hcode" value="<?php echo $hcode; ?>" readonly /></td>
            </tr>

            <tr>
                <td>Hospital Name :</td>
                <td><input type="text" name="hname" value="<?php echo $hname; ?>" readonly /></td>
            </tr>

            <tr>
                <td>Hospital Address :</td>
                <td><input type="text" name="haddr" value="<?php echo $haddr; ?>" readonly /></td>
            </tr>

            <tr>
                <td>Country:</td>
                <td><input type="text" name="hcountry" value="<?php echo $country; ?>" readonly /></td>
            </tr>

            <tr>
                <td>Contact no. :</td>
                <td><input type="number" name="hcont" value="<?php echo $hcont; ?>" readonly /></td>
            </tr>

            <tr>
                <td>Facilities :</td>
                <td><input type="checkbox" name="fac[]" value="Private Rooms" readonly <?php
                                                                                if (in_array("Private Rooms", $hfacs)) {
                                                                                    echo "checked";
                                                                                }
                                                                                ?>>Private Rooms</td>
                <td><input type="checkbox" name="fac[]" value="Cafeteria/Restaurant" readonly <?php
                                                                                        if (in_array("Cafeteria/Restaurant", $hfacs)) {
                                                                                            echo "checked";
                                                                                        }
                                                                                        ?>>Cafeteria/Restaurant</td>
                <td><input type="checkbox" name="fac[]" value="Pharmacy" readonly <?php
                                                                            if (in_array("Pharmacy", $hfacs)) {
                                                                                echo "checked";
                                                                            }
                                                                            ?>>Pharmacy</td>
                <td><input type="checkbox" name="fac[]" value="Ambulance Facility" readonly <?php
                                                                                    if (in_array("Ambulance Facility", $hfacs)) {
                                                                                        echo "checked";
                                                                                    }
                                                                                    ?>>Ambulance Facility</td>
                <td><input type="checkbox" name="fac[]" value="Internet Connection" readonly <?php
                                                                                    if (in_array("Internet Connection", $hfacs)) {
                                                                                        echo "checked";
                                                                                    }
                                                                                    ?>>Internet Connection</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="fac[]" value="Money Exchange" readonly <?php
                                                                                if (in_array("Money Exchange", $hfacs)) {
                                                                                    echo "checked";
                                                                                }
                                                                                ?>>Money Exchange</td>
                <td><input type="checkbox" name="fac[]" value="Transportation service" readonly <?php
                                                                                        if (in_array("Transportation service", $hfacs)) {
                                                                                            echo "checked";
                                                                                        };
                                                                                        ?> />Transportation services</td>
                <td><input type="checkbox" name="fac[]" value="Flight arrangement" readonly <?php
                                                                                    if (in_array("Flight arrangement", $hfacs)) {
                                                                                        echo "checked";
                                                                                    };
                                                                                    ?>>Flight arrangement</td>
                <td><input type="checkbox" name="fac[]" value="Visa arrangement" readonly <?php
                                                                                    if (in_array("Visa arrangement", $hfacs)) {
                                                                                        echo "checked";
                                                                                    };
                                                                                    ?>/>Visa arrangement</td>
            </tr>

            <tr>
                <td>Contact Person Name:</td>
                <td><input type="text" name="hcontnm" value="<?php echo $hcontnm; ?>" readonly /></td>
            </tr>

            <tr>
            <tr>
                <td>Contact Person:</td>
                <td><input type="number" name="hcontper" value="<?php echo $hcont; ?>" readonly /></td>
            </tr>

            <tr>
                <td>
                    <a href="HospitalsDelete.php" class="back">Back</a>
                </td>
                <td>
                    <input type="submit" name="delete" value="Delete" class="button" />
                </td>
            </tr>

        </table>
    </form>

    <?php
            
    mysql_close($con);
    ?>
</body>

</html>