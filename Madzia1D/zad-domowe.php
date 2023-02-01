<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Zgłoszenie na konkurs informatyczny </h1>
    <form method = "POST">
    imie    <input type = "text" name = "imie"><br>
    nazwisko <input type = "text" name = "nazwisko"><br>

    klasa<select name = "klasa">
            <option value = "wybierz"> -wybierz- </option>
            <option value = "1a"> 1a </option>
            <option value = "1b"> 1b </option>
            <option value = "2a"> 2a </option>
            <option value = "2b"> 2b </option>
            <option value = "3a"> 3a </option>
            <option value = "3b"> 3b </option>
        </select><br>
    <input type = "radio" value = "technik informatyk" name = "profil">technik informatyk<br>
    <input type = "radio" value = "technik teleinforamtyk" name = "profil" >technik teleinformatyk<br>
    <input type = "radio" value = "technik programista" name = "profil" >technik programista<br>
    <input type = "checkbox" name = "rodo" > Wyrażam zgodę na przetwarzanie moich danych osobowych <br>
    <input type = "submit" value = "Wyślij">
</form>
    <?php
  // error_reporting(0);
  $czas = date("H:i:s");
  $miesiac = date("m");
  $m = date("m");
  $dzien = date("d");
  $d = $dzien - 1;
  $rok = date("Y");

    if (empty($_POST['imie']) || empty($_POST['nazwisko']) || empty($_POST['klasa']!='wybierz') || empty($_POST['profil']) || $_POST['rodo']!='on'  ){
        echo("Wypełnij proszę wszystkie pola. <br>");
    }
    else { 
        switch($miesiac) {
            case '01':
                $miesiac = "Stycznia";
                break;
            case '02':
                $miesiac = "Lutego";
                break;
            case '03':
                $miesiac = "Marca";
                break;
            case '04':
                $miesiac = "Kwietnia";
                break;
            case '05':
                $miesiac = "Maja";
                break;
            case '06':
                $miesiac = "Czerwca";
                break;
            case '07':
                $miesiac = "Lipca";
                break;
            case '08':
                $miesiac = "Sierpnia";
                break;
            case '09':
                $miesiac = "Września";
                break;
            case '10':
                $miesiac = "Października";
                break;
            case '11':
                $miesiac = "Listopada";
                break;
            case '12':
                $miesiac = "Grudnia";
                break;
        
        
        
        }
    echo("Zgłoszenie przyjęto dnia $dzien-$miesiac-$rok o $czas : <br>"); 
    echo("$_POST[imie] $_POST[nazwisko] <br>");
    echo("klasa: $_POST[klasa] <br>" );
    echo("$_POST[profil] <br>");
    }
    ?>
</body>
</html>