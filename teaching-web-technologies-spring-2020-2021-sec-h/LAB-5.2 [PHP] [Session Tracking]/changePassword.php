<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
		if(isset($_POST['submit'])&&$_POST['cPassword']!==""&&$_POST['cPassword']!==""&&$_POST['newPassword']!==""&&$_POST['rnPassword']!=="")
		{
			if($_POST['cPassword']!==$_SESSION['password'])
			{
				echo "You enter the wrong current password";
			}
			elseif($_POST['cPassword']===$_POST['newPassword'])
			{
				echo "Your current and new password shouldn't match";
			}
			elseif($_POST['newPassword']!==$_POST['rnPassword'])
			{
				echo "New password doesn't match";
			}
			else
			{
				echo "Password change successful";
			}
		}
		else
		{
			echo "Field(s) is/are empty! /r/n";
		}
		
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
            
            <td align="right" colspan="2">
				<a href="home.php"> <img src="logo.png" align="left"> </a>
				Logged in as <a href="dashBoard"><?php echo($_SESSION['userName']) ?></a>
				&nbsp | &nbsp
				<a href="logout.php"> Logout</a>
				&nbsp
			</td>
        </tr>

        <tr height="200px">
        <td width="35%">
				<h4> &nbsp &nbsp &nbsp Account </h4>
				<hr width="90%">
				<ul>
					<li> <a href="dashBoard.php"> Dashboard </a></li>
					<li> <a href="viewProfile.php"> View Profile </a></li>
					<li> <a href="editProfile.php"> Edit Profile </a> </li>
					<li> <a href="changeproPicture.php"> Change Profile Picture </a> </li>
					<li> <a href="changePassword.php"> Change Password </a> </li>
					<li> <a href="logout.php"> Logout </a> </li>
				</ul>
			</td>
			<td align="center">
            <br>
				<form method="POST" action="">
				<fieldset style="width: 50%">
					<legend> <b> CHANGE PASSWORD </b></legend>
						<table>
							<tr>
								<td> Current Password: </td>
								<td>
									<input type="password" name="cPassword">
								</td>
							</tr>

							<tr>
								<td>
									New Password:
								</td>
								<td>
									<input type="password" name="newPassword">
								</td>
							</tr>

							<tr>
								<td>
									Retype New Password:
								</td>
								<td>
									<input type="password" name="rnPassword" >
								</td>
							</tr>
						</table>
					<hr width="80%">
					<input type="submit" name="submit" value="submit">
				</fieldset>
				</form>
				<br> 
			</td>
        </tr>
            
        <tr>
            <td colspan="2">
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