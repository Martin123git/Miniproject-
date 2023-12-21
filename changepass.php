<?php

if(isset($_POST['submit'])) {
    $u = $_POST['username'];
    $op = $_POST['opassword'];
    $np = $_POST['npassword'];

    include("connect.php");  // Make sure you have correct details in your connect.php file

    $mysqli = new mysqli($host, $user, $pass, $db);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Use prepared statements to prevent SQL injection
    $select_user_query = "SELECT * FROM `client` WHERE `username`=? AND `password`=?";
    $stmt = $mysqli->prepare($select_user_query);
    $stmt->bind_param("ss", $u, $op);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Password matches, update the password
        $change_query = "UPDATE `client` SET `password`=? WHERE `username`=?";
        $stmt = $mysqli->prepare($change_query);
        $stmt->bind_param("ss", $np, $u);
        $stmt->execute();

        session_start();
        $_SESSION['change'] = 1;
        header("Location: client.php#contact");
    } else {
        // Password does not match, handle accordingly (e.g., show an error message)
        echo "Incorrect username or password.";
    }

    $stmt->close();
    $mysqli->close();
}

?>
