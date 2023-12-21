<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Management System</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/flesler/jquery.scrollTo/2.1.3/jquery.scrollTo.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/flesler/jquery.localScroll/1.4.0/jquery.localScroll.min.js"></script>
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="css/slimbox2.css">
    <script src="js/slimbox2.js"></script>
    <style>
        body {
            background-color: white;
            background-image: url('images/bg1.gif');
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }

        #templatemo_header {
            background-color: #3b5998;
            padding: 20px 0;
            text-align: center;
        }

        #site_title h2 {
            color: white;
            margin: 0;
        }

        #templatemo_main {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        .section {
            text-align: center;
            padding: 20px;
        }

        .section h2 {
            color: #fff;
            margin-bottom: 20px;
        }

        .section a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            margin: 10px 20px;
            padding: 15px 30px;
            border-radius: 5px;
            background-color: #2952A3;
            transition: background-color 0.3s;
        }

        .section a:hover {
            background-color: #3b5998;
        }

        #templatemo_footer {
            background-color: #2952A3;
            color: #999933;
            text-align: center;
            font-size: 14px;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="templatemo_header">
        <div id="site_title">
            <h2>Welcome Admin !!</h2>
        </div>
    </div>
    <div id="templatemo_main">
        <div id="content" class="section">
            <a href="viewemp.php">View Employee</a>
            <a href="rememp.php">Remove Employee</a>
            
            <a href="chanpass.php">Change Password</a>
            <a href="index.php#contact">Logout</a>
        </div> <!-- END of home -->
    </div>

    
</body>
</html>
