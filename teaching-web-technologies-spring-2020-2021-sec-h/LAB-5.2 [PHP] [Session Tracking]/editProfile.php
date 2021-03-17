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
    <title>EDIT PROFILE</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            
            <td align="right" colspan="2">
				<a href="home.php"> <img src="logo.png" align="left"> </a>
				Logged in as <a href="dashBoard"><?php print_r($_SESSION['userName']) ?></a>
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
				<fieldset style="width: 90%">
					<legend> <b>EDIT PROFILE</b></legend>
						<table>
							<tr>
								<td> Name </td>
								<td co> : &nbsp <input type="text" name="Name" value=" <?php print_r($_SESSION['name']); ?>"  size="35%" <?php  if(isset($_POST['Name'])) { $_SESSION['name'] = $_POST['Name']; } ?> /> 
								<br/> </td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
							<tr>
								<td> Email </td>
								<td> : &nbsp <input type="email" name="Email" value=" <?php print_r($_SESSION['email']); ?>" size="35%" <?php  if(isset($_POST['Email'])) { $_SESSION['email'] = $_POST['Email']; } ?> /> 
								<br/> </td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
					</table>
						<fieldset>
							<legend>Gender</legend>
					            <input type="radio" name="gender" value="Male" <?php if(isset($_SESSION['gender']) && $_SESSION['gender'] === "Male") { echo "checked";}?> <?php  if(isset($_POST['gender'])) { $_SESSION['gender'] = $_POST['gender']; } ?> > Male
					            <input type="radio" name="gender" value="Female" <?php if(isset($_SESSION['gender']) && $_SESSION['gender'] === "Female") { echo "checked";}?> <?php  if(isset($_POST['gender'])) { $_SESSION['gender'] = $_POST['gender']; } ?> > Female
					            <input type="radio" name="gender" value="Others" <?php if(isset($_SESSION['gender']) && $_SESSION['gender'] === "Others" ) { echo "checked";}?> <?php  if(isset($_POST['gender'])) { $_SESSION['gender'] = $_POST['gender']; } ?> > Others
						</fieldset>

						<fieldset>
							<legend>Date of Birth</legend>
									<input type="text" name="date" min="1" max = "31" size="4" value=" <?php print_r($_SESSION['date']); ?> " <?php  if(isset($_POST['date'])) { $_SESSION['date'] = $_POST['date']; } ?> > /
									<input type="text" name="month" min="1" max = "12" size="4" value=" <?php print_r($_SESSION['month']); ?> " <?php  if(isset($_POST['month'])) { $_SESSION['month'] = $_POST['month']; } ?> > /
									<input type="text" name="year" min="1900" max = "2100" size="4" value=" <?php print_r($_SESSION['year']); ?> " <?php  if(isset($_POST['year'])) { $_SESSION['year'] = $_POST['year']; } ?> > <i> (dd/mm/yyyy) </i>
						</fieldset>
					<hr>
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