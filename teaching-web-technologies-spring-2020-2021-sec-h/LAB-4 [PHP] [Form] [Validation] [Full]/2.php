<?php
	
	if(isset($_POST['submit']))
	{
		$count=0;
		$curPassword = $_POST['currentPassword'];
		$nPassword = $_POST['newPassword'];
		$rnewPassword = $_POST['renewPassword'];
        if($nPassword !== $rnewPassword)
		{
			echo "Password doesnt match";
			$count=1;
		}
		if($curPassword === $nPassword)
		{
			echo "Current password and new password cant be same";
			$count=1;
		}
		if($count===0)
		{
			echo "Password change successful";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHANGE PASSWORD</title>
</head>
<body>
    <form method="POST" action="">
		<fieldset>
			<legend> <b>CHANGE PASSWORD</b></legend>
				<table>
				<tr>
					<td>Current Password: </td>
					<td> <input type="password" name="currentPassword"/> 
					<br/> </td>
				</tr>

				<tr>
					<td> New Password: </td>
					<td> <input type="password" name="newPassword"/> <br/></td>
				</tr>

				<tr>
					<td>Retype New Password: </td>
					<td> <input type="password" name="renewPassword"/> <br/></td>
				</tr>
			</table>
			<hr>
			
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>