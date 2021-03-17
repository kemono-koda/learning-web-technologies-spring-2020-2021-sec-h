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
            
            <td align="right" colspan="2">
				<a href="home.php"> <img src="logo.png" align="left"> </a>
				Logged in as <a href="dashBoard.php"><?php echo ($_SESSION['userName']) ?></a>
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
			<td>
				<h3>
					&nbsp &nbsp Welcome <?php echo($_SESSION['name']) ?>
				</h3> 
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