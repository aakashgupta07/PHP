<?php
  $s="Jussieuean";
  $count=0;
  $counta=0;
  $counte=0;
  $counti=0;
  $counto=0;
  $countu=0;
  $l=strlen($s);
  $s=strtolower($s);
  echo "The word is $s <br>";
  for($i=0;$i<$l;$i++)
  {
    $temp=$s[$i];
    switch($temp)
    {
      case "a" : $count++;
                  $counta++;
                  break;
      case "e" : $count++;
                  $counte++;
                  break;
      case "i" : $count++;
                  $counti++;
                  break;
      case "o" : $count++;
                  $counto++;
                  break;
      case "u" : $count++;
                  $countu++;
                  break;
    }
  }
  echo "Total number of vowels is $count <br>";    
  echo "Occurance of 'a' is $counta <br>";    
  echo "Occurance of 'e' is $counte <br>";    
  echo "Occurance of 'i' is $counti <br>";    
  echo "Occurance of 'o' is $counto <br>";    
  echo "Occurance of 'u' is $countu <br>";    
?>