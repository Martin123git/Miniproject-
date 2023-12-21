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
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Could not connect: " . $con->connect_error);
}

// Sanitize user inputs
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$country = mysqli_real_escape_string($con, $_POST['country']);
$type = mysqli_real_escape_string($con, $_POST['type']);

if ($type == "client") {
    $tablechoice = "client";
} else {
    $tablechoice = "employee";
}

// Use prepared statements to prevent SQL injection
$sql = "INSERT INTO $tablechoice (username, password, name, emailid, mobile, address, city, country) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $con->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ssssssss", $username, $password, $fname, $email, $mobile, $address, $city, $country);
    $result = $stmt->execute();

    if (!$result) {
        echo "Incorrect details !<br>";
        include 'register.php';
    } else {
        echo $tablechoice . " added!";
    }

    $stmt->close();
} else {
    echo "Error in prepared statement: " . $con->error;
}

$con->close();
include 'index.php';
?>
</body>
</html>
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
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Could not connect: " . $con->connect_error);
}

// Sanitize user inputs
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$country = mysqli_real_escape_string($con, $_POST['country']);
$type = mysqli_real_escape_string($con, $_POST['type']);

if ($type == "client") {
    $tablechoice = "client";
} else {
    $tablechoice = "employee";
}

// Use prepared statements to prevent SQL injection
$sql = "INSERT INTO $tablechoice (username, password, name, emailid, mobile, address, city, country) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $con->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ssssssss", $username, $password, $fname, $email, $mobile, $address, $city, $country);
    $result = $stmt->execute();

    if (!$result) {
        echo "Incorrect details !<br>";
        include 'register.php';
    } else {
        echo $tablechoice . " added!";
    }

    $stmt->close();
} else {
    echo "Error in prepared statement: " . $con->error;
}

$con->close();
include 'index.php';
?>
</body>
</html>
