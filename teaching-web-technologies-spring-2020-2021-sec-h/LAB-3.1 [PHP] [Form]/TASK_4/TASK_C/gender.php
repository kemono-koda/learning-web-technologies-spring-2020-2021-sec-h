<?php
	
	if(isset($_POST['submit']))
	{
		echo "Input Gender: ";
		$yourGender = $_POST['gender'];
		echo $yourGender;
	}
?>


<html>
<head>
	<title>Gender form input diplay same page and fill</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>GENDER</legend>
          <input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] === "Male") { echo "checked";}?> > Male
          <input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] === "Female") { echo "checked";}?> > Female
          <input type="radio" name="gender" value="Others" <?php if(isset($_POST['gender']) && $_POST['gender'] === "Others" ) { echo "checked";}?> > Other
			<hr>
			<input type="submit" name = "submit" value="submit">
		</fieldset>
	</form>
</body>
</html>