<?php
	session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
</head>
<body>
<body>
	<center>
	<h1>
		Welcome 
		<?php 
			echo $_SESSION['name'];  
		?>
	    !
    </h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="changePass.html">Change Password</a>
	<br/>
	<a href="login.php">Logout</a>
    </center>
</body>
</html>