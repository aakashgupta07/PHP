<?php
  function check_perfect($num)
  {
    $s=0;
    for($i=1;$i<$num-1;$i++)
    {
      if($num%$i==0)
      $s=$s+$i;
    }
    return $s;
  }
  echo "Perfect numbers <br>";
  for($i=0;$i<10000;$i++)
  {
    $flag=check_perfect($i);
    if($flag==$i)
    echo "$i<br>";
  }
?>