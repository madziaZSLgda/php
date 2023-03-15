<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    nick<input type="text" name="nick">
    <br> tresc<input type="text" name="tresc">
    <input type="submit" value="wyslij">
</form>
<?php
$nick=$_POST["nick"];
$tresc=$_POST["tresc"];
$data=date("Y-m-d");
$czas=date("H:i");

$plik=fopen("plik.txt", "a");
fwrite($plik,"<strong> $nick $data $czas</strong><br><i>$tresc</i><br><hr>");
fclose($plik);
$plik=fopen("plik.txt", "r");
$rozmiar=filesize("plik.txt");
$odczyt=fread($plik, $rozmiar);
// fopen($plik, "r");
echo "$odczyt";
fclose($plik);

// echo "<br>$nick $data $czas <br> $tresc <br> ";

?>

</body>
</html>