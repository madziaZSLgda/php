<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=1;$i<11;$i++)
    {
        echo("$i<br>");
    }

    $i=1;
    while($i<=10)
    {
        echo("$i<br>");
        $i++;
    }

    $i=1;
    do{
        echo("$i<br>");
        $i++;
    }
    while($i<=10)
    ?>
</body>
</html>