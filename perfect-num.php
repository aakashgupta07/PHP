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
  $arr=array(1,2,3,4,5,6,7,8,9,28,496);
  for($i=0;$i<count($arr);$i++)
  {
    $flag=check_perfect($arr[$i]);
    if($flag==$arr[$i])
    echo "$arr[$i]<br>";
  }
?>