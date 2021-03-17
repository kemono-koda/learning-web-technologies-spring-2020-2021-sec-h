<?php
    
	session_start();

	if(isset($_POST['submit']))
	{
		$accept = true;

		if($_POST["name"] === ""||$_POST['email'] === ""||$_POST['userName'] === "")
		{
			echo "Fields are empty! \r\n";
			$accept = false;
		}
		elseif(strlen($_POST['userName'])<2)
		{
			echo "User Name must contain at least two (2) characters \r\n";
			$accept = false;
		}
		elseif(strlen($_POST['password'])<8)
		{
			echo "Password must not be less than eight (8) characters \r\n";
			$accept = false;
		}
		elseif($_POST['password'] !== $_POST['chPassword'])
		{
			echo "Passwords dont match! \r\n";
			$accept = false;
		}

		if($accept === true)
		{
			$_SESSION['userName'] = $_POST['userName'];
			$_SESSION['password'] = $_POST['password'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['gender'] = $_POST['gender'];
			$_SESSION['date'] = $_POST['date'];
			$_SESSION['month'] = $_POST['month'];
			$_SESSION['year'] = $_POST['year'];
			$_SESSION['flag'] = true;
			header('location: login.php');
		}
	} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
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
        <td align="center">
            <br>
				<form method="POST" action="">
				<fieldset style="width: 400px">
					<legend> <b>REGISTRATION</b></legend>
						<table>
							<tr>
								<td> Name </td>
								<td> :<input type="text" name="name"/> 
								<br/> </td>
                                <td>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                </td>

							</tr>
							<tr> 
                                <td colspan="3"> <hr> </td>
                            </tr>
							<tr>
								<td> Email </td>
								<td> :<input type="email" name="email"/> 
								<br/> </td>
                                
							</tr>
							<tr> 
                                <td colspan="3"> <hr> </td> 
                            </tr>
							<tr>
								<td> User Name </td>
								<td> :<input type="username" name="userName"/> 
								<br/> </td>
                                
							</tr>
							<tr> <td colspan="3"> <hr> </td> </tr>
							<tr>
								<td> Password </td>
								<td> :<input type="password" name="password"/> 
								<br/> </td>
                                
							</tr>
							<tr> <td colspan="3"> <hr> </td> </tr>
							<tr>
								<td> Confirm Password </td>
								<td> :<input type="password" name="chPassword"/> 
								<br/> </td>
                                
							</tr>
							<tr> <td colspan="3"> <hr> </td> </tr>
					</table>
						<fieldset>
							<legend>Gender</legend>
							    <input type='radio' name='gender' value='Male'>Male
		            			<input type='radio' name='gender' value='Female'>Female
		            			<input type='radio' name='gender' value='Others'>Others
						</fieldset>

						<fieldset>
							<legend>Date of Birth</legend>
									<input type="number" name="date" min="1" max = "31" size="5"> /
									<input type="number" name="month" min="1" max = "12" size="5"> /
									<input type="number" name="year" min="1900" max = "2100" size="5"> <i> (dd/mm/yyyy) </i>
						</fieldset>
					<hr>
                    <input type="submit" name="submit" value="submit">
					<input type="reset" name="reset" value="Reset">
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