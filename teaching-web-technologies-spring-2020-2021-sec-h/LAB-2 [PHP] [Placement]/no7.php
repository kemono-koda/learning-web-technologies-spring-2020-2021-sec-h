<?php
  for($i=0;$i<=2;$i++)
  {
    for($j=0;$j<=$i;$j++)
    {
      echo "*";
    }
    echo "\n";
  }
  echo "\n";
  $count=0;
  for($i=0;$i<=2;$i++)
  {
    for($j=2;$j>=$i;$j--)
    {
      $count++;
      echo "$count";
    }
    echo "\n";
    $count=0;
  }
  echo "\n";

  $char='A';
  for($i=0;$i<=2;$i++)
  {
    for($j=0;$j<=$i;$j++)
    {
      $char++;
      echo "$char";
      //$char=$char++;
    }
    $char='A';
    echo "\n";
  }

?>