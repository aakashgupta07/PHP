<?php
$larstr=$_POST['larstr'];
$sstr=$_POST['sstr'];
$rp=$_POST['repstr'];
$first=strpos($larstr,$sstr);
$second=strrpos($larstr,$sstr);
$str_count=substr_count($larstr,$sstr);
$strrep=str_replace($sstr,$rp,$larstr);
echo"First occurance=$first<br>";
echo"last occurance= $second <br>";
echo "No of occurence=$str_count <br>";
echo" The replaced string is= $strrep" ;
?>