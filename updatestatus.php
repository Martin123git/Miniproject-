<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Courier Management System</title>
</head>

<body>
<?php 
    print "Status Changed !!";
    if (isset($_POST['update'])) {
        $cid = $_POST['cid'];
        $status = $_POST['status'];

        include("connect.php");

        // Use mysqli instead of deprecated mysql functions
        $sql_connect = mysqli_connect($host, $user, $pass, $db);

        // Check connection
        if (!$sql_connect) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $select_user_query = "SELECT * FROM `courier_table` WHERE `cid`='$cid'";
        $select_user = mysqli_query($sql_connect, $select_user_query);

        // Use mysqli_fetch_assoc instead of mysql_fetch_row
        $row = mysqli_fetch_assoc($select_user);
        // $correctpass = $row['password'];

        // Use prepared statement to prevent SQL injection
        $change_query = "UPDATE `courier_table` SET `status`=? WHERE `cid`=?";
        $stmt = mysqli_prepare($sql_connect, $change_query);
        mysqli_stmt_bind_param($stmt, "ss", $status, $cid);
        $change = mysqli_stmt_execute($stmt);

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($sql_connect);

        // session_start();
        // $_SESSION['change'] = 1;
        include("updatecu.php");
        echo "<script>alert('Courier status changed');window.location.href = 'employee.php';</script>";
    }
?>
</body>
</html>
