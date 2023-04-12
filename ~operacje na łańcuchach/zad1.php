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
Imie<input type="text" name="imie"><br>
Nazwisko<input type="text" name="nazwisko">
<input type="submit" value="wyslij">
</form>

<?php
$imie=$_POST["imie"];
$nazwisko=$_POST["nazwisko"];

// if (preg_match('/[A-Z] [a-z]/',$imie)){
//     echo("$imie");
//     }
//     else{
//         echo("podane imię jest niepoprawne");
//     }

// if (preg_match('/[A-Z] [a-z]/',$nazwisko)){
//     echo("$nazwisko");
//     }
//     else{
//             echo("podane nazwisko jest niepoprawne");
//     }

// if (preg_match('/^[A-Z][a-z]$/',$imie) && preg_match('/^[A-Z][a-z]$/',$nazwisko)){

    //zabezpiecza żeby 1 duza litera reszta małe
    $imie=mb_convert_case ($imie, MB_CASE_LOWER, 'UTF-8');
    $nazwisko=mb_convert_case ($nazwisko, MB_CASE_LOWER, 'UTF-8');
    $imie=mb_convert_case ($imie,MB_CASE_TITLE, 'UTF-8');
    $nazwisko=mb_convert_case ($nazwisko,MB_CASE_TITLE, 'UTF-8');

    echo("$imie $nazwisko");

    //zabezpieczenia spacji ihtml

    strip_tags($imie);
    strip_tags($nazwisko);
    htmlspecialchars($imie);
    htmlspecialchars($nazwisko);
    trim($imie);
    trim($nazwisko);

    $im=substr($imie,0,1);

    $im=mb_convert_case ($imie, MB_CASE_LOWER, 'UTF-8');
    $nazwisko=mb_convert_case ($nazwisko, MB_CASE_LOWER, 'UTF-8');
    $login= $im.$nazwisko;

    echo("<br>login: $login");

    $haslo=rand(100,1000);
    echo("<br>haslo: $haslo");

    $md=md5($haslo);
    echo("<br>szyfr md5: $md");
    $sha=sha1($haslo);
    echo("<br>szyfr sha1: $sha");
    $hash=password_hash($haslo,PASSWORD_DEFAULT);
    echo("<br>szyfr passwors_hash: $hash")

// }
// else{
//     echo("źle podane dane");
// }


// if (preg_match('/^[A-Z][a-z]+/',$imie))
// {
//     echo("$imie");

// }
// else
// {
//     echo("blad");
// }



// if (preg_match('/^[A-Z][a-z]+/',$imie)){
//     echo("Podane imię jest poprawne");
//     }
//     else{
//         echo("podane imię jest niepoprawne");
//     }
?>

</body>
</html>