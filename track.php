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
        die('Could not connect: ' . mysqli_error($con));
    }

    $un = mysqli_real_escape_string($con, $_POST['username']);
    $cid = mysqli_real_escape_string($con, $_POST['cid']);

    $sql = "SELECT * FROM courier_table WHERE sname='$un' AND cid='$cid'";
    $result = mysqli_query($con, $sql);

    include("report3.php");

    if (!$result) {
        echo "Incorrect details !<br>";
        include 'client.php';
    } else {
        echo "<table>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>Courier ID:</td><td>{$row['cid']}</td></tr>";
            echo "<tr><td>Sender's Name:</td><td>{$row['sname']}</td></tr>";
            echo "<tr><td>Status:</td><td>{$row['status']}</td></tr>";
        }

        echo "</table>";
    }

    mysqli_close($con);
    ?>
</body>
</html>
