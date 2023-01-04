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
        podaj a: <input type="number" name="a"> <br>
        podaj b: <input type="number" name="b"> <br>
        <input type="submit" value="oblicz">
    </form>

    <?php
  $a=$_POST["a"];
  $b=$_POST["b"];
  $suma=$a+$b;
    $odejmowanie=$b-$a;
    $mnozenie=$a*$b;
    $dzielenie=$b/$a;
    echo("$a+$b=$suma <br> $b-$a=$odejmowanie <br> $a*$b=$mnozenie <br> $b:$a=$dzielenie </br> ");
?>
</body>
</html>