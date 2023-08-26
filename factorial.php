<?php
  function factorial($num)
  {
    $temp=1;
    for($i=2;$i<=$num;$i++)
    {
      $temp=$temp*$i;
    }
    return $temp;
  }
  for($i=3;$i<=20;$i++)
  {
    $val=factorial($i);
    echo "Factorial of $i = $val";
    echo "<br>";
  }
?>