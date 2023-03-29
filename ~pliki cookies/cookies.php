<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
    
    // utworzenie ciasteczka
setcookie($nazwa, $wartosc, $koniec, $sciezka, $domena, 
$bezpieczne);

// zapisanie oddania głosu jednorazowego
setcookie('oddano_glos', '1');

// w przypadku gdy głosować można raz dziennie
setcookie('oddano_glos', '1', time()+3600*24);

// Sprawdzanie obecności ciasteczka
if(isset($_COOKIE['oddano_glos']))
   echo "Ciasteczko istnieje";
else
   echo "Brak ciastecza";

// usuwanie ciasteczka

// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);


    ?>

</body>
</html>