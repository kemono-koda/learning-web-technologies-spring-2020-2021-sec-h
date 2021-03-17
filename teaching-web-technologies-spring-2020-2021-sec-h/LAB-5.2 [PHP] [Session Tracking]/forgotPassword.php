<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUBLIC HOME</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td>
                    <a href="publicHome.html">
                        <img align="left" src="logo.png">
                    </a>
                    <p align="right">
                    
                        <a
                        href="publicHome.html">
                        Home
                        </a>
                        &nbsp | &nbsp
                        <a
                        href="login.php">
                        Login
                        </a>
                        &nbsp | &nbsp
                        <a
                        href="registration.php">
                        Registration
                        </a>
                </p>
            </td>
        </tr>

        <tr>
        <td align="center" height="200px">
				<form method="POST" action="">
					<fieldset style="width: 400px">
						<legend> <b>FORGOT PASSWORD</b></legend>
							<table>
							<tr>
								<td> Enter Email: </td>
								<td> <input type="email" name="email"/> <br/></td>
							</tr>
						</table>
						<hr>
						<input type="submit" name="submit" value="Submit">
					</fieldset>
				</form>
            
			</td>
        </tr>

        <tr>
            <td>
                <p align="center">
                   Copyright &copy 2017
                </p>
            </td>
        </tr>
    </table>
</body>
</html>

<?php

	}else{
		echo "Register before accessing this page";
		header('location: registration.php');
	}

?>