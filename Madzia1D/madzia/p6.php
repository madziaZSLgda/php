<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <div> <input type="radio" name="profil" value="info">info </div>
        <div> <input type="radio" name="profil" value="teleinfo"> teleinfo </div>
        <div> <input type="radio" name="profil" value="programista"> programista </div>
        <input  type = "checkbox" name = "zgoda" > Wyrażam zgodę (na oddanie dobrowolnie swoich nerek) <br>
        <textarea class="uwagi" name="uwagi"></textarea>
        <input class="wyslij" type="submit" value="wyślij">
        
    </form>
</body>
<?php
    $profil=$_POST["profil"];
    $uwagi=$_POST["uwagi"];

echo("<br> Właśnie wybrałeś profil $profil </br>");
echo("<br> - $uwagi </br>
<br>- who asked? </br>");
?>
</html>