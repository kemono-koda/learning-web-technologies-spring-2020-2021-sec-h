<?php
	if(isset($_POST['submit']))
	{
        $count = 0;
		for ($i=0; $i < strlen($_POST['password']); $i++) 
        { 
			if($_POST['password'][$i] === '%' || $_POST['password'][$i] === '$' || $_POST['password'][$i] === '#' || $_POST['password'][$i] === '@')
			{
				$count++;
			}
		}
        if($count===0)
        {
            echo "Please insert a special character";
        }

		if(strlen($_POST["name"])<2)
		{
			echo "User Name must contain at least two (2) characters";
		}
		elseif(strlen($_POST['password'])<8)
		{
			echo "Password must not be less than eight (8) characters";
		}

		
	} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
<form method="POST" action="">
		<fieldset>
			<legend> <b>LOGIN</b></legend>
				<table>
				<tr>
					<td>User Name: </td>
					<td> <input type="text" name="name"/> 
					<br/> </td>
				</tr>

				<tr>
					<td> Password: </td>
					<td> <input type="password" name="password"/> <br/></td>
				</tr>
			</table>
			<hr>
			<input type="checkbox" name="checkbox"> Remember Me
			<br> <br>
			<input type="submit" name="submit" value="submit"> 
            <a href=""> Forgot Password? </a>
		</fieldset>
	</form>
</body>
</html>