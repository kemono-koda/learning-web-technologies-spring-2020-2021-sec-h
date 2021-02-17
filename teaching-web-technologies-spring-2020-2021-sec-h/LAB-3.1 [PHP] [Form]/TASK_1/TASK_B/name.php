<?php
  
  if($POST['myName'] !== '')
  {
    echo "Input Name: ";
    $inputName=$_POST['myName'];
    echo "$inputName";
  }
  else
  {
    echo "Please enter a name";
  }
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name form input display same page</title>
  </head>
  <body>
  <form method="POST" action="">
  <fieldset>
    <legend>NAME</legend>
    <table>
      <tr>
        <td>
          <input type="text" name="myName">
          <hr>
          <input type="submit" name="submit" value="submit">
        </td>
      </tr>
    </table>
  </fieldset>
</form>
  </body>
  </html>