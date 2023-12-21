<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

    .section {
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 600px;
    }

    table {
      width: 70%;
      margin: 20px auto;
      border-collapse: collapse;
    }

    .TrackTitle {
      background-color: #4caf50;
      color: white;
      padding: 10px;
      font-weight: bold;
    }

    .gentxt {
      width: 80%;
      padding: 8px;
      margin: 5px 0 15px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 4px;
    }

    .gentxt[type="submit"] {
      background-color: #4caf50;
      color: white;
      cursor: pointer;
    }

    .gentxt[type="submit"]:hover {
      background-color: #45a049;
    }

    .style1 {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="section" id="testimonial">
    <h2>Remove Employee</h2>
    <div class="clear h40"></div>
    <div class="half left">
      <table cellpadding="4" cellspacing="0" align="center">
        <tbody>

          <tr>
            <td class="bottom" valign="middle">&nbsp;</td>
          </tr>
          <tr bgcolor="#EFEFEF">
            <td class="aalpha" valign="top"><div align="center" class="style1">Enter the Employee's username</div></td>
          </tr>
          <tr bgcolor="#EFEFEF">
            <td valign="top">
              <div align="center">
                <form action="removeemp.php" method="post" name="form" id="form">
                  <input name="emp" class="gentxt" id="emp" maxlength="50" type="text" />
                  <input name="Submit" type="submit" class="gentxt" value="Remove Employee">
                </form>
                
              </div>
            </td>
          </tr>
          <tr bgcolor="#EFEFEF">
            <td valign="top">&nbsp;</td>
          </tr>
          <tr bgcolor="#EFEFEF">
            <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
          </tr>
        </tbody>
      </table>
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
