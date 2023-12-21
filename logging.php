<?php
session_start();

// Include the database connection file
include("connect.php");

if (isset($_POST['submit'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    // Check if type is set and valid
    if (isset($_POST['type']) && in_array($_POST['type'], ['client', 'admin', 'employee'])) {
        $conn = new mysqli($host, $user, $pass, $db);

        // Check connection
        if ($conn->connect_error) {
            die('Could not connect: ' . $conn->connect_error);
        }

        switch ($_POST['type']) {
            case "client":
                $select_user_query = "SELECT * FROM `client` WHERE `username`=? AND `password`=?";
                break;
            case "admin":
                $select_user_query = "SELECT * FROM `admin` WHERE `username`=? AND `password`=?";
                break;
            case "employee":
                $select_user_query = "SELECT * FROM `employee` WHERE `username`=? AND `password`=?";
                break;
        }

        $stmt = mysqli_prepare($conn, $select_user_query);
        if ($stmt === false) {
            die('Error in preparing statement: ' . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "ss", $u, $p);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result === false) {
            die('Error in getting result: ' . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['type'] = $_POST['type'];
            $_SESSION['username'] = $u;

            switch ($_POST['type']) {
                case "client":
                    header("Location: client.php");
                    exit();
                case "admin":
                    header("Location: admin.php");
                    exit();
                case "employee":
                    header("Location: employee.php");
                    exit();
            }
        } else {
            echo "Invalid Username and Password !!";
            include 'index.php';
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } else {
        echo "Invalid user type";
        // Handle the error, redirect or display a message as needed
    }
}
?>
