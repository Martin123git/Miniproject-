<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Courier Management System</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            text-align: center; /* Center-align the text content of the body */
        }

        header {
            text-align: center; /* Center-align the text content of the header */
            padding: 20px; /* Add some padding for better visual appearance */
        }
    </style>
</head>

<body>
    <header>
    <h3>VIEW COURIERS</h3>
    </header>
    <?php
    $con = mysqli_connect("localhost", "root", "", "courier");
    if (!$con) {
        die('Could not connect' . mysqli_error($con));
    }

    $sn = mysqli_real_escape_string($con, $_POST['sname']); // Prevent SQL injection

    $sql = "SELECT * FROM courier_table WHERE sname='$sn'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        echo "Incorrect details !<br>";
        include 'addc.php';
    } else {
        echo '<div class="container mt-5">';
        echo '<table class="table">';
        echo '<thead class="thead-dark">';
        echo '<tr><th>cid</th><th>orig</th><th>dest</th><th>sname</th><th>rname</th><th>radd</th><th>date</th><th>rate</th><th>mode</th><th>status</th></tr>';
        echo '</thead><tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['cid']}</td><td>{$row['orig']}</td><td>{$row['dest']}</td><td>{$row['sname']}</td><td>{$row['rname']}</td><td>{$row['radd']}</td><td>{$row['date']}</td><td>{$row['rate']}</td><td>{$row['mode']}</td><td>{$row['status']}</td></tr>";
        }

        echo '</tbody></table>';
        echo '</div>';
    }

    mysqli_close($con);
    ?>

    <!-- Add Bootstrap JS and Popper.js (if needed) for Bootstrap features -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
