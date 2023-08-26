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
  $arr=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
  for($i=0;$i<count($arr);$i++)
  {
    $flag=check_prime($arr[$i]);
    if($flag==1)
    echo "$arr[$i]<br>";
  }
?>