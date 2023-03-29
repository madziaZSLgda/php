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
    email<input type="text" name="m">
    <input type="submit" value="wyslij">
    </form>
    
    <?php
    $m=$_POST["m"];
    if (preg_match('/^([A-Z]|[a-z]{4,20})(@)(([A-Z]|[a-z]){2,10})\\.(pl|com)$/',$m)){
    echo("Podany email jest poprawny");
    }
    else{
        echo("Podany email jest niepoprawny");
    }

    ?>

</body>
</html>