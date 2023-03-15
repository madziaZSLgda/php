<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
$plik=fopen("liczby.txt", "r");
$rozmiar=filesize("liczby.txt");
$x=fread($plik, $rozmiar);
fclose($plik);

// zmienia miejsce w tablicy na zdj zamiast liczb
// strlen liczy liczbe miejsc w tablicy 

$miejsca=strlen($x); 
for ($i = 0; $i < $miejsca; $i++)
{
    echo("<img src='$x[$i].png'>");
}

//echo "$x";
$plik=fopen("liczby.txt", "w");
$x=$x+1;
$x=fwrite($plik, $x);
fclose($plik);


// STRLEN($miejsca);


    ?>
</body>
</html>