<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
<?php

echo "<tr>";
echo "<th></th>";
for ($w = 1; $w <= 9; $w++) {
  echo "<th>$w</th>";
}
echo "</tr>";


for ($i = 1; $i <= 9; $i++) {
  echo "<tr>";
  
  
  echo "<th>$i</th>";
  
  for ($w = 1; $w <= 9; $w++) {
    echo "<td>";
    echo $i * $w;
    echo "</td>";
  }
  
  echo "</tr>";
}

?> 
</table>	

	
</body>
</html>