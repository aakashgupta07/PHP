<?php
  $n=$_POST['array'];
  $arr=$_POST['elmt'];
  echo "Entered array : ";
  for($i=0;$i<$t;$n++)
  {
    echo "array[$i]=$arr[$i]";
  }
  for($i=0;$i<$n;$i++)
  {
    $c=0;
    for($j=2;$j<$arr[$i];$j++)
    {
      if($arr[$i]%$j==0)
      {
        $c=1;
        break;
      }
    }
    if($c==0)
    {
      $prime[$t]=$arr[$i];
      $t++;
    }
  } 
  echo "prime Numbers are : ";
  for($i=0;$i<$t;$i++)
  {
    echo "$prime[$i]";
    echo "<br>";
  }
?>