<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Courier Management System</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courier";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Could not connect: ' . $conn->connect_error);
}

$sql1 = "SELECT * FROM courier_table WHERE `status`='Loaded'";
$sql2 = "SELECT * FROM courier_table WHERE `status`='In Transit'";
$sql3 = "SELECT * FROM courier_table WHERE `status`='Delivered'";
$sql4 = "SELECT * FROM courier_table";

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);

include("report1.php");

if (!$result1 || !$result2 || !$result3 || !$result4) {
    echo "Error!" . "</br>";
    include 'report.php';
} else {
    // Your code to display the tables and calculate total revenue goes here
}

// Close connection
$conn->close();
?>
</body>
</html>
