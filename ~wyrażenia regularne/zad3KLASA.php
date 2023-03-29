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
    klasa<input type="text" name="kl">
    <input type="submit" value="wyslij">
    </form>
    
    <?php
    $kl=$_POST["kl"];
    if (preg_match('/^[1-5][a-i]$/',$kl)){
    echo("Podana klasa jest poprawna");
    }
    else{
        echo("podana klasa jest niepoprawna");
    }

    ?>

</body>
</html>