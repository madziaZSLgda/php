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
        <input type="submit" value="policz" name="ilosc">
    <?php
    $ilosc=1;
    $ilosc=$_POST["ilosc"];
    setcookie("klikniecia",$ilosc, time()+1);
    $nowe=$ilosc+1;
    echo($nowe);
    ?>
</body>
</html>