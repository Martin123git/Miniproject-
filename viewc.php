<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Management System</title>

    <style>
        body {
            background-color: #2781BA;
            background-image: url('images/bg1.gif');
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        #templatemo_header {
            background-color: #2952A3;
            padding: 10px;
            text-align: center;
            color: #fff;
        }

        #templatemo_header h2 {
            margin: 0;
            font-size: 24px;
        }

        .body {
            margin: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #000000;
        }

        table.ds_box {
            display: none;
        }

        form {
            margin-top: 20px;
        }

        table {
            width: 75%;
            margin: auto;
            border-collapse: collapse;
        }

        table td {
            padding: 8px;
        }

        .TrackMediumBlue {
            color: #000000;
            text-align: right;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .footer {
            background-color: #2952A3;
            background-image: url('images/tdback1.gif');
            border-top: 1px grey solid;
            color: #999933;
            text-align: center;
            font-size: 8pt;
            padding: 10px;
            margin-top: 20px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>
</head>
<body>
    <div id="templatemo_header">
        <h2><a href="addc.php">Add</a> and View Couriers <a href="client.php#home" class="slider_nav_btn home_btn">Home</a></h2>
    </div>

    <div class="body">
        <h3>View Courier</h3>

        <form action="viewcourier.php" method="post" name="frmShipment">
            <table>
                <tr>
                    <td class="TrackMediumBlue" align="right">Sender Name:</td>
                    <td><input name="sname" maxlength="100" type="text" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input align="right" name="pay" type="submit" value="View Courier"></td>
                </tr>
            </table>
        </form>
    </div>

   
</body>
</html>
