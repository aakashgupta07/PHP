<?php
  $num1=$_POST['val1'];
  $num2=$_POST['val2'];
  $opt=$_POST['oper'];
  switch($opt)
  {
    case 1: echo "$num1 + $num2 = ".($num1+$num2);
            break;
    case 2: echo "$num1 - $num2 = ".($num1-$num2);
            break;
    case 3: echo "$num1 * $num2 = ".($num1*$num2);
            break;
    case 4: if($num2==0)
            {
              echo "Division is not possible";
            } else
            {
              echo "$num1 / $num2 = ".($num1/$num2);
              break;
            }
  }
?>