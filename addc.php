<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Management System</title>
    <!-- Create a separate CSS file for additional styling -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        nav {
            margin-top: 1em;
        }

        nav a {
            color: #fff;
            margin: 0 1em;
            text-decoration: none;
        }

        .container {
            width: 75%;
            margin: 2em auto;
        }

        .add-courier {
            background-color: #fff;
            padding: 1em;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Add inline styles for form elements */
        form {
            margin-top: 20px;
        }

        form table {
            border-collapse: collapse;
            width: 100%;
        }

        form td {
            padding: 8px;
        }

        form input,
        form select,
        form textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        form input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Courier Management System</h1>
        <nav>
            <a href="viewc.php">View Couriers</a>
            <a href="client.php#home">Home</a>
        </nav>
    </header>

    <div class="container">
        <section class="add-courier">
            <h2>Add Courier</h2>
            <form action="addcourier.php" method="post" name="frmShipment" onsubmit="return getSelected(this)">
                <!-- Form elements go here -->
                
                <table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
                  <tbody>
                  <tr>
                      <td colspan="3" class="TrackMediumBlue" align="left">
                                <strong>Sender's info : </strong></td>
                  </tr>
                   <tr>
                      <td class="TrackMediumBlue" align="right" width="162">Sender Name   :</td>
                      <td width="16">&nbsp;</td>
                      <td width="339">
                        <input name="sname"  maxlength="100" size="40" type="TEXT" required> </td>
                   </tr>
                          <tr>
                            <td class="TrackMediumBlue" align="right">Origin City   :</td>
                            <td>&nbsp;</td>
                            <td><input name="orig" id="orig" maxlength="13" size="40" type="TEXT" required></td>
                          </tr>
                          <tr>
                            <td class="TrackMediumBlue" align="right">Sender's Address   :</td>
                            <td>&nbsp;</td>
                            <td><span class="REDLink">
                              <textarea name="saddress" cols="27" rows="2" id="saddress" required></textarea>
                              </span></td>
                          </tr>
                          <tr>
                            <td class="TrackMediumBlue" align="right">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="3" class="TrackMediumBlue" align="right"><div class="headtext13" align="left"><strong>Receiver  info : </strong></div></td>
                          </tr>
                          <tr>
                            <td class="TrackMediumBlue" align="right">Receiver's Name : </td>
                            <td>&nbsp;</td>
                            <td><input name="rname" id="rname" maxlength="100" size="40" type="TEXT" required>
                                <span class="REDLink"></span></td>
                          </tr>
                          <tr>
                            <td class="TrackMediumBlue" align="right">Destination City : </td>
                            <td>&nbsp;</td>
                            <td><input name="dest" id="dest" maxlength="13" size="40" type="TEXT" required></td>
                          </tr>
                          <tr>
                            <td class="TrackMediumBlue" align="right"> Receiver's Address: : </td>
                            <td>&nbsp;</td>
                            <td><span class="REDLink">
                              <textarea name="raddress" cols="27" rows="2" id="raddress" required></textarea>
                              </span></td>
                          </tr>
                          <tr>
                            <td class="TrackMediumBlue" align="right">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="3" class="TrackMediumBlue" align="right"><div class="headtext13" align="left"><strong>Courier   info : </strong></div></td>
                          </tr>
                          <tr>
                            <td class="TrackMediumBlue" align="right">Mode of Transport  :</td>
                            <td>&nbsp;</td>
                            <td><select id="mode" name="mode">
                                <option value="air" selected="selected">Air</option>
                                <option value="surface">Surface</option>
                                <option value="water">Water</option>
                            </select>                            </td>
                          </tr>
                          <tr>
                            <td class="TrackMediumBlue" align="right">Weight : </td>
                            <td>&nbsp;</td>
                            <td><input id="weight" size="10" maxlength="10" name="wt" required>
                              (kg)</td>
                          </tr>
                          <tr>
                            <td class="TrackMediumBlue" align="right">Number of Packages:</td>
                            <td>&nbsp;</td>
                            <td><input name="num" id="num" size="40" maxlength="20"  type="INT" required></td>
                          </tr>

                          <tr>
                            <td class="TrackNormalBlue" align="right" valign="top">Status :</td>
                            <td>&nbsp;</td>
                            <td><select name="status" id="status">
                                <option selected="selected" value="Loaded">Loaded</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td align="right">&nbsp;</td>
                            
                          
                            <td><input align="right" name="pay" type="submit" value="Add Courier" /></td>
                                        
                            
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                  </tbody></table>
                
            </form>
        </section>
    </div>

    
</body>
</html>
