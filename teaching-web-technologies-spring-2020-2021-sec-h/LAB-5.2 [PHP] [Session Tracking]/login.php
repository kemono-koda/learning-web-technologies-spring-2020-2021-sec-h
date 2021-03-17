<?php
    session_start();

    if(isset($_POST['submit']))
    {
        $accept=true;
        if($_POST["userName"]===""|| $_POST["password"]==="")
        {
            echo "Some fields are empty! \r\n";
        }
        elseif(strlen($_POST["userName"])<2)
        {
            echo "User must contain at least two (2) characters \r\n";
        }
        elseif(strlen($_POST["password"])<8)
        {
            echo "Password must be bigger than eight characters";
        }
        if($accept)
		{
            $_SESSION['flag1'] = true;
			if(isset($_SESSION['userName']) && isset($_SESSION['password']) && isset($_SESSION['email']) &&isset($_SESSION['name']) &&isset($_SESSION['gender']) &&isset($_SESSION['date']) &&
            isset($_SESSION['month']) &&isset($_SESSION['year']))
			{
				if(isset($_SESSION['flag'])&&$_SESSION['flag'] ===$_SESSION['flag1']&&$_POST['userName'] === $_SESSION['userName'] && $_POST['password'] === $_SESSION['password'])
				{
					header('location: dashBoard.php');
				}
				else
				{
					echo "Please check username and password";
				}
			}
			else
			{
                echo "Please register first!";
			}
		}

    }


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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
            <br>
            <form method="POST" action="">
					<fieldset style="width: 400px">
						<legend> <b>LOGIN</b></legend>
							<table>
							<tr>
								<td >User Name: </td>
								<td> <input type="text" name="userName"/> 
								<br/> </td>
							</tr>

							<tr>
								<td> Password: </td>
								<td> <input type="password" name="password"/> <br/></td>
							</tr>
						</table>
						<hr>
						<input type="checkbox" name="checkbox"> Remember Me
						<br> <br>
						<input type="submit" name="submit" value="submit"> <a href="forgotPassword.php"> Forgot Password? </a>
                        <br>
					</fieldset>
				</form>
                <br>
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