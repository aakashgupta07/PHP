<?php
  if($year%4==0 || $year%400==0  && $year%100!=0)
  {
    echo "$year is leap year";
  } else
  {
    echo "$year is not leap year";
  }
  ?>