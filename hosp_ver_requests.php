<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedTour-Hospital</title>
</head>

<body>
    <table align="center" cellpadding="10" style="border:1px solid black">
        <tr>
            <td><a href='hospital_admin.html'>
                    <h1>Home</h1>
                </a></td>
                <td><a href='hospital_admin.html'>
                    <h1>Back</h1>
                </a></td>
        </tr>
        <tr>
            <th>Hospital Code</th>
            <th>Hospital Name</th>
            <th>Hospital Address</th>
            <th>Country</th>
            <th>Contact no.</th>
            <th>Facilities</th>
            <th>Contact Person Name</th>
            <th>Contact Person Contact no.</th>
            <th>Status</th>
        </tr>
        <?php
        $con = mysql_connect("localhost", "root", "");
        if ($con) {
            // echo "Connected to MySQL"."<br/>";
        }
        mysql_selectdb("medtour");
        $sql = "select * from `hospital details`";
        $result = mysql_query($sql, $con);

        while ($row = mysql_fetch_array($result)) {
            $DB_hcode = $row['HCode'];
            $DB_hname = $row['HName'];
            $DB_haddr = $row['HAddr'];
            $DB_country = $row['HCountry'];
            $DB_hcont = $row['HCont'];
            $DB_fac = $row['HFac'];
            $DB_hcontnm = $row['HContPName'];
            $DB_hcontper = $row['HContPer'];
            $DB_status= $row['Status'];

        ?>
            <tr>

                <td><?php echo $DB_hcode; ?></td>
                <td><?php echo $DB_hname; ?></td>
                <td><?php echo $DB_haddr; ?></td>
                <td><?php echo $DB_country; ?></td>
                <td><?php echo $DB_hcont; ?></td>
                <td><?php echo $DB_fac; ?></td>
                <td><?php echo $DB_hcontnm; ?></td>
                <td><?php echo $DB_hcontper; ?></td>
                <!-- <td><?php echo $DB_status; ?></td> -->
                <td><a href="hpedit_details.php?HName= <?php echo $DB_hname; ?>"Status</a></td>
            </tr>

        <?php
        }
        mysql_close($con);
        ?>

    </table>
</body>

</html>