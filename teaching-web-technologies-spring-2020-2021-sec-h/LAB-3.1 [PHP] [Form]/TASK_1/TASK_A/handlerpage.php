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