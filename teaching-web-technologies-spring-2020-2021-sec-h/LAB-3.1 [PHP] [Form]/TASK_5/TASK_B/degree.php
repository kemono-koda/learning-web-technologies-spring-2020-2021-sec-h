<?php
  echo "Input Degree: ";
	$yourDegree = $_POST['degree'];
	echo "$yourDegree";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Degree form input display same page</title>
</head>
<body>
  <form method="POST" action="">
		<fieldset>
			<legend>DEGREE</legend>
			<input type="checkbox" name="degree" value="SSC"> SSC
			<input type="checkbox" name="degree" value="HSC"> HSC
			<input type="checkbox" name="degree" value="BSc"> BSc
			<hr>
			<input type="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>