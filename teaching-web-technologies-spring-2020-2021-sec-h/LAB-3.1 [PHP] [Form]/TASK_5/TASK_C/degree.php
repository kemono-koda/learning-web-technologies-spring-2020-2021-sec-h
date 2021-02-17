<?php
  echo "Input Degree: ";
	if(isset($_POST['SSC']) || isset($_POST['HSC']) || isset($_POST['BSc']) || isset($_POST['MSc']))
	{

	    if(isset($_POST['SSC'])) echo "SSC ";
	    if(isset($_POST['HSC'])) echo "HSC ";
	    if(isset($_POST['BSc'])) echo "BSc ";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Degree form input display same page with fill</title>
</head>
<body>
  <form method="POST" action="">
		<fieldset>
			<legend>DEGREE</legend>
			<input type='checkbox' name='SSC' value='SSC' <?php if(isset($_POST['SSC'])) {echo "checked";} ?> >SSC
      <input type='checkbox' name='HSC' value='HSC' <?php if(isset($_POST['HSC'])) {echo "checked";} ?> >HSC
      <input type='checkbox' name='BSc' value='BSc' <?php if(isset($_POST['BSc'])) {echo "checked";} ?> >BSc
			<hr>
			<input type="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>