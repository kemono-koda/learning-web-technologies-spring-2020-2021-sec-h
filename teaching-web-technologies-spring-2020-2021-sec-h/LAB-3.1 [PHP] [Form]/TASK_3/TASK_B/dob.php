<?php

	$date = $_POST['date'];
  echo "$date / ";
	$month = $_POST['month'];
  echo "$month / ";
	$year = $_POST['year'];
  echo "$year";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DOB form input display same page</title>
</head>
<body>
  <form method="POST" action="">
		<fieldset>
			<legend>Date of Birth</legend>
					<pre> <b> dd                        mm                       yyyy </b> </pre>
					<input type="number" name="date" size="6"> /
					<input type="number" name="month" size="6"> /
					<input type="number" name="year" size="6"> <br>
					<hr>
					<input type="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>