<?php
  $day=date("D");
  switch($day)
  {
    case "Sun" : echo "Today is Sunday";
                  $bgcolor="red";
                  break;
    case "Mon" : echo "Today is Monday";
                  $bgcolor="yellow";
                  break;
    case "Tue" : echo "Today is Tuesday";
                  $bgcolor="blue";
                  break;
    case "Wed" : echo "Today is Wednesday";
                  $bgcolor="green";
                  break;
    case "Thu" : echo "Today is Thursday";
                  $bgcolor="orange";
                  break;
    case "Fri" : echo "Today is Friday";
                  $bgcolor="grey";
                  break;
    case "Sat" : echo "Today is Saturday";
                  $bgcolor="pink";
                  break;
    default : echo "Invalid date";
              $bgcolor="black";              
  }
  echo "<body bgcolor=$bgcolor></body>";
?>