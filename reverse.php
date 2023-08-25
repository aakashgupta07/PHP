<?php
$num=156;
$rev=0;
$temp=$num;
while ($num>0) {
  $r=$num%10;
  $rev=($rev*10)+$r;
  $num=(int)($num/10);
}
echo "Reverse of $temp is $rev";
?>