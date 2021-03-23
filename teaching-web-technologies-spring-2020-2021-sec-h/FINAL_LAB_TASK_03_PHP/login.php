<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form method="POST" action="">
		<fieldset>
			<legend>
				<b>LOGIN</b>
			</legend>
			<table>
				<tr>
					<td>
						User Id
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
						<input type="checkbox" name="rememberMe">
                        Remeber Me
                    </td>
				</tr>
				<tr>
					<td>
						<hr>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="login" value="Login">
					
						<a href="registration.php"> Register </a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>