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
    <title>VIEW PROFILE</title>
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

        <tr>
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
			<td>
            <br>
				<fieldset style="width: 50%">
					<legend> <b> PROFILE </b> </legend>
					<table>
						<tr>
							<td>
								<b>Name:</b>
							</td>
							<td colspan="2">
								<?php print_r($_SESSION['name']) ?>
							</td>
							<td rowspan="5">
								&nbsp &nbsp &nbsp &nbsp &nbsp
								<img src="user.png" alt="User Profile Picture" width="150" height="100">
								<p align="center"> <a href="changeProfilePicture.php"> Change </a> </p>
							</td>
						</tr>
						<tr> <td colspan="2"> <hr> </td> </tr>
						<tr>
							<td>
								<b>Email:</b>
							</td>
							<td>
								<?php print_r($_SESSION['email']) ?>
							</td>
						</tr>
						<tr> <td colspan="2"> <hr> </td> </tr>
						<tr>
							<td>
								<b>Gender:</b>
							</td>
							<td>
								<?php print_r($_SESSION['gender']) ?>
							</td>
						</tr>
						<tr> <td colspan="2"> <hr> </td> </tr>
						<tr>
							<td>
								<b>Date of Birth:</b>
							</td>
							<td>
								<?php print_r($_SESSION['date']) ?>/<?php print_r($_SESSION['month']) ?>/<?php print_r($_SESSION['year']) ?>
							</td>
						</tr>
						<tr> <td colspan="4"> <hr> </td> </tr>
						<tr>
							<td colspan="4"> 
								<a href="editProfile.php"> Edit Profile </a>
							</td>
						</tr>
					</table>
				</fieldset>
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