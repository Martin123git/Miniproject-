<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Courier Management System</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .section {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 8px;
        }

        .login_table {
            background-color: #f2f2f2;
            padding: 15px;
            border-radius: 5px;
        }

        .login_nam {
            font-size: 18px;
            font-weight: bold;
        }

        .login,
        .style1 {
            padding: 5px;
        }

        input[type="text"],
        input[type="int"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .gentxt {
            font-size: 14px;
            color: #555;
        }

        .new {
            width: 10px;
        }
    </style>
</head>
<body>
    <!-- Your existing HTML content goes here -->
    <div class="section section_with_padding" id="testimonial"> 
            <h2>Track Courier</h2>
            <p>&nbsp;</p>
            <div class="clear h40"></div>
          <div class="half left">
            <table cellpadding="4" cellspacing="0" align="center" width="70%">
              <script language="JavaScript" type="text/javascript">
function validate()
  {
 if (form.Consignment.value == "" )
		 {
			alert("Consignment No is required.");
			form.track.focus( );
			return false;
		}
	}
            </script>
              <tbody>
                <tr>
                  <td class="TrackTitle" valign="top"><div class="newtext" align="center"><strong> Track and Trace your Cargo/Courier <br />
                  </strong></div></td>
                </tr>
                
                
                <tr bgcolor="EFEFEF">
                  <td valign="top"><div align="center">
                      
                      
                      <table width="91%" align='center' cellpadding= "0" cellspacing= "0" class='main_tab'>
                                                             
                                    
                                    <tr>
                                     <td class='login_table' align='left'><form action='trackhome.php' method='post' name="form" id="form">
                                       <table class="login_tab">
                                            <tr>
                                                <td colspan="2" class='login_nam' valign='middle'>Track Courier</td>
                                            </tr>
                                            <tr>
                                                <td class='login style1'>Username:</td>
                                                <td class='login'><input type='text' name='username' required> </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class='login style1'>Courier Number:</td>
                                                <td class='login'><input type='int' name='cid' required> </td>
                                            </tr>
                                           
                                            
                                            <tr>
                                                <td class='login' colspan='2'><input type='submit' name='submit' value='Track Now !!'>
                                                  </td>
                                                <td class='new'>&nbsp;</td>
                                            </tr>
                                      </table>
                                      </form>	</td>
                                    </tr>
                                    
                                </table>
                      
                    <span class="gentxt style1">&nbsp;&nbsp;</br> </span> </div></td>
                </tr>
                <tr bgcolor="EFEFEF">
                  <td valign="top">&nbsp;</td>
                </tr>
                <tr bgcolor="EFEFEF">
                  <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
                </tr>
              </tbody>
            </table>
            <p>&nbsp;</p>
        </div>
        </div>
</body>
</html>
