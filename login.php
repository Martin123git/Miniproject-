<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Courier Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .section_with_padding {
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .half {
            width: 50%;
            display: inline-block;
            vertical-align: top;
        }

        .login_table {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
        }

        .login_tab {
            width: 100%;
            border-collapse: collapse;
        }

        .login_nam {
            background-color: #3b5998;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            text-align: center;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .login {
            padding: 10px;
        }

        .style1 {
            font-weight: bold;
        }

        input[type='text'],
        input[type='password'] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type='submit'] {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover,
        input[type='submit']:hover {
            background-color: #45a049;
        }

        .new {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="section_with_padding" id="login">
        <h2>Login Page</h2>
        <div class="half left">
            <h4>&nbsp;</h4>
            <div class="login_table" align="left">
                <form action="logging.php" method="post">
                    <table class="login_tab">
                        <tr>
                            <td colspan="2" class="login_nam" valign="middle">User Login</td>
                        </tr>
                        <tr>
                            <td class="login style1">Username:</td>
                            <td class="login"><input type="text" name="username" required> </td>
                        </tr>
                        <tr>
                            <td class="login style1">Password:</td>
                            <td class="login"><input type="password" name="password" required> </td>
                        </tr>
                        <tr>
                            <td class="login style1">User Type:</td>
                            <td align="center" bgcolor="#c0c0c0"><select name="type">
                                    <option value="client">Client</option>
                                    <option value="employee">Employee</option>
                                    <option value="admin">Admin</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td class="login" colspan="2"><input type="submit" name="submit" value="Login">
                                <button><a href="register.php" class="normal">Sign Up</a></button></td>
                            <td class="new">&nbsp;</td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
