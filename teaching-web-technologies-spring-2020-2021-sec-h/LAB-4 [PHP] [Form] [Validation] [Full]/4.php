<?php
if(isset($_POST['submit']))
{

	$name 		= $_POST['Name'];
	$email 		= $_POST['Email'];
	$userName 	= $_POST['userName'];
	$pass 		= $_POST['Password'];
	$cPass 		= $_POST['confirmPassword'];
	$gender 	= $_POST['gender'];

	if($name == "" || $email == ""|| $userName == ""|| $pass == ""|| $cPass == ""|| $gender == "")
	{
		echo "Null submission";
	}
	else
	{
		if($pass===$cPass)
		{
			echo "Success";
		}
		else
		{
			echo "Pass doesnt match";
		}
	}
}
else
{
	echo "Invalid request...";
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
			<legend> <b>REGISTRATION</b></legend>
				<table>
					<tr>
						<td> Name </td>
						<td> :<input type="text" name="Name"/> 
						<br/><hr>
						</td>
						 
					</tr>
					
					<tr>
						<td> Email </td>
						<td> :<input type="email" name="Email"/> 
						<br/><hr>
						</td>
					</tr>
					<tr>
						<td> User Name </td>
						<td> :<input type="username" name="userName"/> 
						<br/><hr> 
						</td>
					</tr>
					<tr>
						<td> Password </td>
						<td> :<input type="password" name="Password"/> 
						<br/><hr> 
						</td>
					</tr>
					<tr>
						<td> Confirm Password </td>
						<td> :<input type="password" name="confirmPassword"/> 
						<br/><hr>
						</td>
					</tr>
			</table>
			<fieldset>
				<legend>GENDER</legend>
					<input type='radio' name='gender' value='Male'>Male
					<input type='radio' name='gender' value='Female'>Female
					<input type='radio' name='gender' value='Others'>Others
			</fieldset>
			<fieldset>
				<legend>DOB</legend>
						<input type="number" name="date" size="6"> /
						<input type="number" name="month" size="6"> /
						<input type="number" name="year" size="6"> (dd/mm/yyyy)
			</fieldset>
			<hr>
			<input type="submit" name="submit" value="submit">
			<input type="reset" name="reset" value="reset">
			
		</fieldset>
	</form>
</body>
</html>