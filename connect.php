
<?php
$host = "localhost"; // Change this to your actual database host
$user = "root"; // Change this to your actual database username
$pass = ""; // Change this to your actual database password
$db = "courier"; // Change this to your actual database name

// Create a connection to the MySQL database
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If you reach this point, the connection was successful
echo "Connected successfully";

// Now you can perform database operations using $conn

// Don't forget to close the connection when you're done
$conn->close();
?>
