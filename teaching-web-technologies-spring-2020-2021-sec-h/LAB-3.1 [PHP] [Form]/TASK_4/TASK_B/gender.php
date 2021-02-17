<?php

  echo "Input Gender: ";
  $yourGender = $_POST['gender'];
  echo "$yourGender";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gender form input display same page</title>
</head>
<body>
  <form method="POST" action="">
  <fieldset>
    <legend>GENDER</legend>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <hr>
    <input type="submit" value="submit">
  </fieldset>

  </form>
</body>
</html>