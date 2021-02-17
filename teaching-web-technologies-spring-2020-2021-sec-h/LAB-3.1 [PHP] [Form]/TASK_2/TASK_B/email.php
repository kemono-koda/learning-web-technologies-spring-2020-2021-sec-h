<?php
	
	if(isset($_POST['submit']))
	{
    echo "Input email: ";
		$yourEmail = $_POST['myEmail'];
		echo "$yourEmail";
	}
?>

<html>
<head>
	<title>Email form input display same page</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>EMAIL</legend>
			<table>
				<tr>
					<td>
						<input type="email" name="myEmail">
						<hr>
						<input type="submit" name="submit" value="submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html