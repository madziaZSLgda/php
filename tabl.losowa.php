<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method = "POST">
   </form>
    
    <?php
// wypełnienie tablicy 10 losowymi liczbami od 0 do 100
for ($i = 0; $i < 10; $i++) {
    $tablica[$i] = rand(0, 100);
  }
  
  // wyświetlenie tablicy
  echo "Tablica losowych liczb: ";
  echo implode(", ", $tablica) . "<br>";
  
  // wyznaczenie najniższej i najwyższej liczby
  $min = min($tablica);
  $max = max($tablica);
  echo "Najniższa liczba: $min <br>";
  echo "Najwyższa liczba: $max <br>";
  
  // wyznaczenie średniej
  $srednia = array_sum($tablica) / count($tablica);
  echo "Średnia: $srednia <br>";
  
  // posortowanie tablicy
  sort($tablica);
  
  // wyświetlenie posortowanej tablicy
  echo "Posortowana tablica: ";
  echo implode(", ", $tablica);
    ?>
</body>
</html>