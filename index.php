<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Management System</title>
    <link rel="stylesheet" href="engine1/style.css" />
    <link rel="stylesheet" href="templatemo_style.css" type="text/css" />
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <style>
        body {
            background-color: #2781BA;
            background-image: url('images/bg1.gif');
            margin: 0;
            font-family: 'Courier New', Courier, monospace;
            color: #fff;
        }

        #templatemo_header {
            text-align: center;
            padding: 20px 0;
        }

        #site_title {
            font-size: 24px;
            margin-top: 20px;
        }

        #site_title img {
            vertical-align: middle;
            margin-right: 10px;
        }

        #templatemo_main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .section {
            text-align: center;
            padding: 20px;
        }

        .box {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .box h3 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #000;
        }

        .box p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #333;
        }

        .box a {
            display: inline-block;
            text-decoration: none;
            font-size: 18px;
            margin: 10px;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
        }

        .btn-about {
            background-color: #4CAF50;
            transition: background-color 0.3s;
        }

        .btn-about:hover {
            background-color: #45a049;
        }

        .btn-login {
            background-color: #FF5722;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #e64a19;
        }

        .no_mr {
            margin-right: 0;
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
            <img src="images/icon.png" alt="Courier" width="70px" height="70px" />
            <span>Courier Management System</span>
        </div>
    </div>

    <div id="templatemo_main">
        <div id="content" class="section">

            <div class="col-md-6 mx-auto box">
                <h3>Welcome</h3>
                <p>
                    <strong>Our Courier Services company aspires to become India’s most preferred end-to-end
                        Logistics, Express &amp; Retail Services conglomerate with comprehensive global reach.</strong>
                </p>
                <p>
                    <em>Dedicated and reliable Courier Service system.</em>
                </p>
            </div>

            <div class="col-md-4 box btn-about mx-auto my-3">
                <a href="about.php" class="btn btn-success btn-block btn-about">About</a>
            </div>

            <div class="col-md-4 box btn-login no_mr mx-auto my-3">
                <a href="login.php" class="btn btn-danger btn-block btn-login">Login</a>
            </div>

        </div> <!-- END of content -->
    </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
