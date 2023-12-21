<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Management System</title>
    <style>
        body {
            background-color: white;
            background-image: url('images/bg1.gif');
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #templatemo_header {
            background-color: #2952A3;
            padding: 10px;
            text-align: center;
            color: white;
        }

        #site_title h2 {
            margin: 0;
        }

        #templatemo_main {
            padding: 20px;
        }

        .box {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .box h3 {
            margin-top: 0;
        }

        .box p {
            line-height: 1.6;
        }

        .box a {
            color: #999933;
        }

        .box a:hover {
            font-size: 1.2em;
        }

        #home_gallery img {
            max-width: 100%;
            height: auto;
        }

        .home_box {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #3b5998;
            color: white;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .home_box a {
            display: block;
            text-decoration: none;
            color: white;
        }

        .home_box h3 {
            margin: 10px 0;
        }

        #services table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        #services table, #services td {
            border: 1px solid #666666;
        }

        #services td {
            padding: 10px;
            text-align: center;
        }

        #templatemo_footer {
            background-color: #2952A3;
            padding: 10px;
            text-align: center;
            color: #999933;
        }
    </style>
</head>

<body>
    <div id="templatemo_header">
        <div id="site_title">
            <h2>Hello Client!!</h2>
        </div>
    </div>
    <div id="templatemo_main">
        <div id="content">
            <div id="home" class="section">
                <div class="box">
                    <h3><a href="index.php#contact">Logout</a></h3>
                    <p><strong>In this section, you can </br><li>1. Add Courier</li></br><li>2. View Couriers</li></br><li>3. Track Courier</li></br><li>4. View rate table</li></br><li>5. Change Password</li></strong></p>
                    <p>Dedicated and reliable Courier Service system.</p>
                </div>

                <div class="home_box" onclick="rateval.php">
                    <a href="rateval.php">
                        <h3>Rate table</h3>
                    </a>
                </div>
                <div class="home_box" onclick="ctrack.php">
                    <a href="ctrack.php">
                        <h3>Track</h3>
                    </a>
                </div>
                <div class="home_box" onclick="addc.php">
                    <a href="addc.php">
                        <h3>Add and View Couriers</h3>
                    </a>
                </div>
                <div class="home_box" onclick="chanpass.php">
                    <a href="chanpass.php">
                        <h3>Change password</h3>
                    </a>
                </div>
            </div>
      </body>
      </html>
                       
