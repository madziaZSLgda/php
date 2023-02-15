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
        podaj liczbe z której zostanie obliczona silnia<input type = "number" name = "liczba"><br>
        <input type = "submit" value = "oblicz silnie">
    </form>
<?php
$i=1;
$wynik=1;
$silnia=1;
while ($i<=$_POST['liczba']) 
{
    $wynik=$wynik*$i;
    $i++;
}
echo ("Silnia wynosi: $wynik !!!<br>");

?>
</body>
</html>