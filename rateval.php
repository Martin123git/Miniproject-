<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Courier Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            text-align: center;
        }

        .section_with_padding {
            padding: 20px;
        }

        h2, h3 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid #666666;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #2952A3;
            color: #fff;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="section_with_padding" id="services">
        <h2>Rate Table</h2>
        <h3>Mode</h3>
        <table>
            <tr>
                <th>Mode of transport</th>
                <th>Price (₹)</th>
            </tr>
            <tr>
                <td>Air</td>
                <td>₹100</td>
            </tr>
            <tr>
                <td>Surface</td>
                <td>₹70</td>
            </tr>
            <tr>
                <td>Water</td>
                <td>₹50</td>
            </tr>
        </table>

        <p>&nbsp;</p>

        <table>
            <tr>
                <th>Weight of Courier:</th>
                <th>Price (₹)</th>
            </tr>
            <tr>
                <td>Weight in Kgs</td>
                <td>* Mode of Transport</td>
            </tr>
        </table>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>Rate of Courier Delivery = Mode of Transport * Weight in Kgs * Number of Courier Packages</p>
        <p>e.g Mode of Transport = Air
            <br /> Weight in Kgs = 0.5
            <br /> Number of Courier Packages = 2
            <br /> Rate of Courier Delivery = ₹100 * 0.5 * 2 = ₹100</p>
    </div>
</body>

</html>
