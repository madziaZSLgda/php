<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        podaj imie: <input type="text" name="imie"> <br>
        <input type="submit" value="wyślij">
        <input type="reset" value="wyczyść">
    </form>
<?php
  $imie=$_POST["imie"];
  echo("<h2> Witaj $imie !!! </h2> ");
?>

</body>
</html>