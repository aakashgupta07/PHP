<?php
  $num=786;
  $rev=0;
  echo "The number is $num <br>";
  while($num>0)
  {
    $r=$num%10;
    $rev=($rev*10)+$r;
    $num=(int)($num/10);
  }
  echo "The number in words is ";
  while($rev>0)
  {
    $d=$rev%10;
    switch($d)
    {
      case 1 : echo"One ";
                break;
      case 2 : echo"Two ";
                break;
      case 3 : echo"Three ";
                break;
      case 4 : echo"Four ";
                break;
      case 5 : echo"Five";
                break;
      case 6 : echo"Six ";
                break;
      case 7 : echo"Seven ";
                break;
      case 8 : echo"Eight ";
                break;
      case 9 : echo"Nine ";
                break;
      case 0 : echo"Zero ";
                break;
    }
    $rev=(int)($rev/10);
  }
?>