<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Courier Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #333;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            margin-bottom: 20px;
        }

        .container {
            max-width: 80%;
            margin: 20px auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h4>Courier Management System</h4>
    </header>

    <div class="container">
        <?php
        // Your PHP code here
        
        $con = mysqli_connect("localhost", "root", "", "courier");
        if (!$con) {
            die('Could not connect' . mysqli_error($con));
        }

        $un = $_POST['username'];
        $cid = $_POST['cid'];

        $sql = "SELECT * FROM courier_table WHERE sname='$un' AND cid='$cid'";

        $result = mysqli_query($con, $sql);

    

        if (!$result) {
            echo "<p class='error'>Incorrect details !</p>";
            include 'index.php';
        } else {
            echo "<table>";
            echo "<tr><th>Courier ID</th><th>Sender's Name</th><th>Status</th></tr>";

            while ($row = mysqli_fetch_row($result)) {
                echo "<tr><td>{$row[0]}</td><td>{$row[3]}</td><td>{$row[9]}</td></tr>";
            }

            echo "</table>";
        }

        mysqli_close($con);
        ?>
    </div>
</body>

</html>
