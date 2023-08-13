<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First Scipt</title>
</head>
<body>
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
</body>
</html>