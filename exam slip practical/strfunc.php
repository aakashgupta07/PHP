<?php
function totalvowel($s)
{
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
      case "a" :  echo "<br>$s[$i] found at position $i";
                  $count++;
                  $counta++;
                  break;
      case "e" :  echo "<br>$s[$i] found at position $i";
                  $count++;
                  $counte++;
                  break;
      case "i" :  echo "<br>$s[$i] found at position $i";
                  $count++;
                  $counti++;
                  break;
      case "o" :  echo "<br>$s[$i] found at position $i";
                  $count++;
                  $counto++;
                  break;
      case "u" :  echo "<br>$s[$i] found at position $i";
                  $count++;
                  $countu++;
                  break;
    }
  }
  echo "<br>Total number of vowels is $count <br>";    
  echo "Occurance of 'a' is $counta <br>";    
  echo "Occurance of 'e' is $counte <br>";    
  echo "Occurance of 'i' is $counti <br>";    
  echo "Occurance of 'o' is $counto <br>";    
  echo "Occurance of 'u' is $countu <br>";    
}

function checkpalindrome($str)
{
if(strcasecmp($str,strrev($str))==0)
{
echo "$str is palindrome";
return;
}
else

echo "$str is not palindrome";
}

?>