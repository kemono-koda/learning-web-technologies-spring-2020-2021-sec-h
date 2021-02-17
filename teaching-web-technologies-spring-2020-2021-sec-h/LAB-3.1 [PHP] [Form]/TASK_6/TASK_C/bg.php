<?php
	if(isset($_POST['submit']))
	{
	echo "Input Blood Group: ";
	$bloodGroup = $_POST['bloodGroup'];
	echo "$bloodGroup";
  }
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
          <option value="A+" <?php if(isset($_POST["bloodGroup"]) && $_POST["bloodGroup"]=='A+') { echo "selected"; } ?> >A+</option>
		 	 		<option value="B+"<?php if(isset($_POST["bloodGroup"]) && $_POST["bloodGroup"]=='B+') { echo "selected"; } ?>>B+</option>
          <option value="B-"<?php if(isset($_POST["bloodGroup"]) && $_POST["bloodGroup"]=='B-') { echo "selected"; } ?>>B-</option>
		 	 		<option value="O+"<?php if(isset($_POST["bloodGroup"]) && $_POST["bloodGroup"]=='O+') { echo "selected"; } ?>>O+</option>
          <option value="O-"<?php if(isset($_POST["bloodGroup"]) && $_POST["bloodGroup"]=='O-') { echo "selected"; } ?>>O-</option>
          <option value="AB+"<?php if(isset($_POST["bloodGroup"]) && $_POST["bloodGroup"]=='AB+') { echo "selected"; } ?>>AB+</option>
		 	 	</select>
		 	 	<hr>
				<input type="submit" name = "submit" value="submit">
		</fieldset>
	</form>
</body>
</html>