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
    KOD POCZTOWY<input type="text" name="kod">
    <input type="submit" value="wyslij">
    </form>
    
    <?php
    $kod=$_POST["kod"];
    if (preg_match('/^[0-9]{2}-[0-9]{3}$/',$kod)){
    echo("Podany kod jest poprawny");
    }
    else{
        echo("podany kod jest niepoprawny");
    }

    ?>

</body>
</html>