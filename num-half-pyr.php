  <?php
  for($row=0;$row<5;$row++)
  {
    for($col=0;$col<$row+1;$col++)
    {
      $temp=$col+1;
      echo "$temp";
    }
    echo "<br>";
  }
  ?>