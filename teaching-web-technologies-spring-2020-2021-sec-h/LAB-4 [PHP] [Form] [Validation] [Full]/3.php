<?php
	
	if(isset($_POST['submit']))
	{
		
		$extension = strtolower(pathinfo($_POST['ProfilePicture'], PATHINFO_EXTENSION));
		if($extension!=='jpg'&&$extension!=='jpeg'&&$extension!=='png')
		{
			echo "Submit in mentioned extension jpg,jpeg or png";
		}
		elseif(getimagesize($_POST['ProfilePicture']) > 4)
		{
			echo "Submit in mentioned size 4 MB";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE PICTURE</title>
</head>
<body>
    <form method="POST" action="">
		<fieldset>
			<legend> <b>PROFILE PICTURE</b></legend>
				<table>
				<tr>
					<img height="270px" width="250px" src="user.png" alt="user logo">
				</tr>
				<tr>
					<td> <input type="file" name="profilePicture"/> 
					<br/> </td>
				</tr>
			</table>
			<hr>
			<br>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>