<?php
  function check_prime($num)
  {
    if($num==1)
    return 0;

    for($i=2;$i<$num-1;$i++)
    {
      if($num%$i==0)
      return 0;
    }
    return 1;
  }
  echo "Prime numbers <br>";
  for($i=2;$i<500;$i++)
  {
    $flag=check_prime($i);
    if($flag==1)
    echo "$i<br>";
  }
?>