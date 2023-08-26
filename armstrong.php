<?php
  function armstrong($num)
  {
    $rev=0;
    while ($num>0) {
      $r=$num%10;
      $rev=$rev+($r*$r*$r);
      $num=(int)($num/10);
    }
    return $rev;
  }

  echo "Armstrong number<br>";
  for($i=1;$i<500;$i++)
  {
    $temp=$i;
    $val=armstrong($temp);
    if($val==$temp)
    echo "$i<br>";
  }
?>