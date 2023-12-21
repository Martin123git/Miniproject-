<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Courier Management System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .section {
            padding: 20px;
        }

        #contact {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333333;
        }

        .half {
            width: 50%;
            float: left;
        }

        .left {
            padding-right: 20px;
        }

        .main_tab {
            width: 91%;
            margin: auto;
            border-collapse: collapse;
        }

        .login_tab {
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
        }

        .login_nam {
            height: 30px;
            font-size: 18px;
            color: #ffffff;
            background-color: #3b5998;
            padding-left: 10px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .login {
            padding: 10px;
        }

        .style1 {
            color: #000000;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="section section_with_padding" id="contact"> 
        <h2>Change Password</h2> 
        <?php
            // client.php
            
            // Ensure session is started only once
            if (!session_id()) {
                session_start();
            }
            
            // Rest of your code...

            if (isset($_SESSION['change']) && $_SESSION['change'] == 1) {
                echo "<script>alert('Password Changed');window.location.href = 'index.php';</script>";
                $_SESSION['change'] = 0;
            }
        ?>
        <div class="half left">
            <h4>&nbsp;</h4>
            <table class="main_tab" width="91%" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="login_table" align="left">
                        <form action="changepass.php" method="post">
                            <table class="login_tab">    
                                <tr>
                                    <td colspan="2" class="login_nam" valign="middle">Change Password</td>
                                </tr>
                                <tr>
                                    <td class="login style1">Username:</td>
                                    <td class="login"><input type="text" name="username" required></td>
                                </tr>
                                <tr>
                                    <td class="login style1">Old Password:</td>
                                    <td class="login"><input type="password" name="opassword" required></td>
                                </tr>
                                <tr>
                                    <td class="login style1">New Password:</td>
                                    <td class="login"><input type="password" name="npassword" required></td>
                                </tr>
                                <tr>
                                    <td class="login" colspan="2">
                                        <input type="submit" name="submit" value="Change">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
