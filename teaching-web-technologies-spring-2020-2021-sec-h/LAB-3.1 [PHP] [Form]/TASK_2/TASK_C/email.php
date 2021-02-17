<?php
	
		echo "Input email: ";
		$yourEmail = $_POST['myEmail'];
		echo "$yourEmail";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Name input same page with fill</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>EMAIL</legend>
			<table>
				<tr>
					<td>
						<input type="email" name="myEmail" value=" <?php echo "$yourEmail" ?>">
						<hr>
						<input type="submit" name="Submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>