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
        podstawa<input type = "number" name = "podstawa"><br>
        wykladnik<input type = "number" name = "wykladnik"><br>
        <input type = "submit" value = "oblicz">
    </form>
<?php
echo("<h2><br>ten program policzy potęgę(wykładnik) danej liczby(podstawa)<br></h2>");
$i=1;
//$wynik1=1;
$wynik=1;
$podstawa=$_POST["podstawa"];
$wykladnik=$_POST["wykladnik"];


if ($wykladnik==0) {
    echo "Wpisz inny wykladnik.";
}
else {

while ($i<=$wykladnik) {
    $wynik=$wynik*$podstawa;
    $i++;
}
echo ("$podstawa <sup>$wykladnik</sup> = $wynik");
}
?>
</body>
</html>
