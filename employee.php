<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2781BA;
        }

        #templatemo_header {
            background-color: #2952A3;
            text-align: center;
            padding: 10px 0;
        }

        #site_title {
            margin-top: 20px;
        }

        #templatemo_main {
            margin: 20px;
        }

        .section {
            margin-bottom: 20px;
        }

        .box {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .box h3 {
            margin-bottom: 10px;
        }

        .box p {
            line-height: 1.6;
        }

        .box li {
            list-style-type: none;
            margin-bottom: 10px;
        }

        .box a {
            text-decoration: none;
            color: #000;
        }

        #home_gallery {
            display: flex;
            flex-wrap: wrap;
        }

        #home_gallery a {
            flex: 0 0 48%;
            margin: 1%;
        }

        .home_box1,
        .home_box2 {
            cursor: pointer;
        }

        #templatemo_footer {
            background-color: #2952A3;
            color: #999933;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <div id="templatemo_header">
        <div id="site_title">
            <h2>Welcome Employee !!</h2>
        </div>
    </div>
    <div id="templatemo_main">
        <div id="content">
            <div id="home" class="section">
                <div id="home_about" class="box">
                    <h3><a href="index.php#contact">Logout</a></h3>
                    <p>
                        <strong>In this section, you can </strong>
                        <ul>
                            <li>1. View Courier Orders</li>
                            <li>2. Edit Courier Statuses</li>
                            <li>3. Change Password</li>
                        </ul>
                    </p>
                    <p>Dedicated and reliable Courier Service system.</p>
                </div>



                <div class="box home_box2 color1">
                    <a href="viewce.php">View Couriers</a>
                </div>

                <div class="box home_box2 color3">
                    <a href="updatecu.php">Update Courier Status</a>
                </div>

                <div class="box home_box1 color4 no_mr">
                    <a href="chanpass.php">Change Password</a>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
