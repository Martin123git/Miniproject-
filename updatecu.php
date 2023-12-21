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

        .section {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        .half {
            width: 50%;
            float: left;
        }

        .login_tab1 {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .login_tab1 td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px;
        }

        .login_nam {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .style1 {
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="section" id="testimonial"> 
        <h2>Update Courier Status</h2>
        <div class="clear h40"></div>
        <div class="half left">
            <form action="updatestatus.php" method="post">
                <table class="login_tab1">
                    <tr>
                        <td colspan="2" class='login_nam' valign='middle'>Update Courier Status</td>
                    </tr>
                    <tr>
                        <td class='login style1'>Courier ID:</td>
                        <td class='login'><input type='text' name='cid' required></td>
                    </tr>
                    <tr>
                        <td class="login style1">New Status:</td>
                        <td align="center" bgcolor="#c0c0c0">
                            <select name="status">
                                <option value="Loaded">Loaded</option>
                                <option value="In Transit">In Transit</option>
                                <option value="Delivered">Delivered</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class='login' colspan='2'><input type='submit' name='update' value='Update' /></td>
                    </tr>
                </table>
            </form>
            <p>&nbsp;</p>
        </div>
    </div>
</body>
</html>
