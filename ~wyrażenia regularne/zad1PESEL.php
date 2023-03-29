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
    PESEL<input type="text" name="pesel">
    <input type="submit" value="wyslij">
    </form>
    
    <?php
    $pesel=$_POST["pesel"];
    if (preg_match('/^[0-9]{11}$/',$pesel)){
    echo("Podany PESEL jest poprawny");
    }
    else{
        echo("podany PESEL jest niepoprawny");
    }

    ?>

</body>
</html>