<?php
  include "strfunc.php";
  $ch=$_POST['oper'];
  $str=$_POST['txt1'];
  switch($ch)
  {
  case "vowel":totalvowel($str);
               break;
  case "palindrome":
    checkpalindrome($str);
               break;
   default: echo "Invalid choice";
 }
 ?>