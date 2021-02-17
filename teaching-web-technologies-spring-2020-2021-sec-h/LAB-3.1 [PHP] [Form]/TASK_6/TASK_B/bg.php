<?php
	
	echo "Input Blood Group: ";
	$bloodGroup = $_POST['bloodGroup'];
	echo "$bloodGroup";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bg form input display same page</title>
</head>
<body>
  <form method="POST" action="">
		<fieldset>
			<legend>Blood Group</legend>
				 <select name="bloodGroup">
		 	 		<option value="A+">A+</option>
		 	 		<option value="B+">B+</option>
          <option value="B-">B-</option>
		 	 		<option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
		 	 	</select>
		 	 	<hr>
				<input type="submit" name = "submit" value="submit">
		</fieldset>
	</form>
</body>
</html>