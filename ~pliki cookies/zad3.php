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
        wartość ciasteczka:<input type="text" name="wartosc">
        <input type="submit" value="wyślij">
    <?php

    $wartosc=$_POST["wartosc"];
    setcookie("odwiedziny",$wartosc, time()+60*5);

    ?>
</body>
</html>