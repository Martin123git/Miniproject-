<!DOCTYPE html>
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

        h2 {
            color: #333333;
        }

        table {
            width: 80%;
            margin: 20px auto;
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
    <h2>Courier Details</h2>
    <?php
    // Your PHP code remains unchanged

    // Create a new MySQLi connection
    $con = new mysqli("localhost", "root", "", "courier");

    // Check connection
    if ($con->connect_error) {
        die('Could not connect: ' . $con->connect_error);
    }

    // Query to select all rows from courier_table
    $sql = "SELECT * FROM courier_table";

    // Perform the query
    $result = $con->query($sql);

    // Check if the query was successful
    if (!$result) {
        echo "Incorrect details !<br>";
        include 'employee.php';
    } else {
        // Display the results in a table
        echo "<table>";
        echo "<tr><th>cid</th><th>orig</th><th>dest</th><th>sname</th><th>rname</th><th>radd</th><th>date</th><th>rate</th><th>mode</th><th>status</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['cid']}</td>";
            echo "<td>{$row['orig']}</td>";
            echo "<td>{$row['dest']}</td>";
            echo "<td>{$row['sname']}</td>";
            echo "<td>{$row['rname']}</td>";
            echo "<td>{$row['radd']}</td>";
            echo "<td>{$row['date']}</td>";
            echo "<td>{$row['rate']}</td>";
            echo "<td>{$row['mode']}</td>";
            echo "<td>{$row['status']}</td>";
            echo "</tr>";
        }

        echo "</table>";
    }

    // Close the connection
    $con->close();
    
    ?>
</body>
</html>
