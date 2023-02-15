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
      $czas = date("H:i:s");
      $miesiac = date("m");
      $dzien = date("d");
      $dzientyg = date("w");
      $rok = date("Y");

        switch($miesiac) {
            case '1':
                $miesiac = "Stycznia";
                break;
            case '2':
                $miesiac = "Lutego";
                break;
            case '3':
                $miesiac = "Marca";
                break;
            case '4':
                $miesiac = "Kwietnia";
                break;
            case '5':
                $miesiac = "Maja";
                break;
            case '6':
                $miesiac = "Czerwca";
                break;
            case '7':
                $miesiac = "Lipca";
                break;
            case '8':
                $miesiac = "Sierpnia";
                break;
            case '9':
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

        switch($dzientyg) {
            case '1':
                $dzientyg = "Poniedziałek";
                break;
            case '2':
                $dzientyg = "Wtorek";
                break;
            case '3':
                $dzientyg = "Środa";
                break;
            case '4':
                $dzientyg = "Czwartek";
                break;
            case '5':
                $dzientyg = "Piątek";
                break;
            case '6':
                $dzientyg = "Sobota";
                break;
            case '0':
                $dzientyg = "Niedziela";
                break;
            }
   
        echo("Dziś jest $dzien-$miesiac-$rok, $dzientyg $czas <br>"); 


    ?>
</body>
</html>