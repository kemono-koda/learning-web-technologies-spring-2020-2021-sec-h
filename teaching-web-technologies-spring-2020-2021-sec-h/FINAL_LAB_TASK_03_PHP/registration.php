<?php
	if(isset($_POST['registration']))
	{


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
<form method="POST" action="">
		<fieldset>
			<legend>
				<b>REGISTRATION</b>
			</legend>
			<table>
				<tr>
					<td>
						Id
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="id">
					</td>
				</tr>
				<tr>
					<td>
						Password
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td>
						Confirm Password
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="cPassword">
					</td>
				</tr>
				<tr>
					<td>
						Name
					</td>
				</tr>
				<tr>
					<td>
						<input type="name" name="name">
					</td>
				</tr>
                <tr>
					<td>
						Email
					</td>
				</tr>
				<tr>
					<td>
						<input type="email" name="email">
					</td>
				</tr>
				<tr>
					<td>
						User Type
					</td>
				</tr>
				
				<tr>
					<td>
						
                        <select name="user" id="cars">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                        
                        </select>
                    
                    </td>
				</tr>
				<tr>
					<td> <hr> </td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="register" value="register">
					
						<a href="login.php"> Login </a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>