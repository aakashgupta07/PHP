<?php
$num=156;
$rev=0;
while ($num>0) {
  $r=$num%10;
  $rev=($rev*10)+$r;
  $num=(int)($num/10);
}
echo "$rev";
?>