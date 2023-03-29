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
    data w formie YYYY-m-d<input type="text" name="d">
    <input type="submit" value="wyslij">
    </form>
    
    <?php
    $d=$_POST["d"];
    if (preg_match('/^([0-9]{4})-([1-12])-([1-31])$/',$d)){
    echo("Podana data jest poprawna");
    }
    else{
        echo("podana data jest niepoprawna");
    }

    ?>

</body>
</html>