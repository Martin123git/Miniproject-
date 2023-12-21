<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Courier Management System</title>
</head>

<body>
<?php

$con = mysqli_connect("localhost", "root", "", "courier");
if (!$con) {
    die('could not connect' . mysqli_error($con));
}

if (isset($_POST['pay'])) {
    $mode = 0;

    if (isset($_POST['mode'])) {
        if ($_POST['mode'] == 'air') {
            $mode = 100;
        } elseif ($_POST['mode'] == 'surface') {
            $mode = 70;
        } else {
            $mode = 50;
        }
    } else {
        // Handle the case when 'mode' is not set
        echo "Mode is not set!" . "</br>";
        include 'addc.php';
        mysqli_close($con);
        exit();  // Stop further execution
    }

    // Check if other required fields are set
    if (
        isset($_POST['orig'], $_POST['dest'], $_POST['sname'], $_POST['rname'], $_POST['raddress'], $_POST['wt'], $_POST['num'])
    ) {
        $rate = (float)$_POST['wt'] * (int)$_POST['num'] * (int)$mode;

        $query = "INSERT INTO `courier_table`(orig, dest, sname, rname, radd, rate, mode) VALUES ('$_POST[orig]','$_POST[dest]','$_POST[sname]','$_POST[rname]','$_POST[raddress]',$rate,'$_POST[mode]')";
        $result = mysqli_query($con, $query);

        if (!$result) {
            echo "Incorrect details !" . "</br>";
            include 'addc.php';
        } else {
            echo " Courier Loaded !" . "</br>";
            $query = "SELECT * FROM courier_table ORDER BY cid DESC LIMIT 1 ";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_row($result);
            echo "<script>alert('Courier added');window.location.href = 'client.php';</script>";
            include 'addc.php';
        }
    } else {
        // Handle the case when some required fields are not set
        echo "Incomplete data submitted!" . "</br>";
        include 'addc.php';
    }
}

mysqli_close($con);
?>

</body>
</html>
