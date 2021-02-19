<?php
  $arr=[1,2,3,4,5,6];
  $find=4;
  $count=0;
  foreach ($arr as $value) 
	{
		if($value === $find)
		{
			echo "Found the element:\n $value";
			$count = 1;
		}
	}
  if($count===0)
  echo "Not found";
?>