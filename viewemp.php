<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Courier Management System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        table {
            width: 80%;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
<?php
// Replace with your actual database credentials
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

$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if (!$result) {
    echo "Incorrect details !<br>";
    include 'admin.php';
} else {
    echo "<table>";
    echo "<tr><th>Username</th><th>Name</th><th>Mobile</th><th>Address</th><th>City</th><th>Country</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['username']}</td><td>{$row['name']}</td><td>{$row['mobile']}</td><td>{$row['address']}</td><td>{$row['city']}</td><td>{$row['country']}</td></tr>";
    }

    echo "</table>";
}

// Close connection
$conn->close();
?>
</body>
</html>
