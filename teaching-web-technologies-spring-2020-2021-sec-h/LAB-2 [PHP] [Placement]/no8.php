<?php
  $arr=[
      [1,2,3,'A'],
			[1,2,'B','C'],
			[1,'D','E','F']
  ];
  
  $max=2;
  for($i=0;$i<=2;$i++)
  {
    for($j=0;$j<=$max;$j++)
    {
      echo $arr[$i][$j];
    }
    $max--;
    echo "\n";
  }

  echo "\n";
  $max=3;
  for($i=0;$i<=2;$i++)
  {
    for($j=$max;$j<4;$j++)
    {
      echo $arr[$i][$j];
    }
    $max--;
    echo "\n";
  }
?>