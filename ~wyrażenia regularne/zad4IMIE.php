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
    imie<input type="text" name="im">
    <input type="submit" value="wyslij">
    </form>
    
    <?php
    $im=$_POST["im"];
    if (preg_match('/^[A-ZŁ]{1}[a-ząęćłńóśźż]+/',$im)){
    echo("Podane imię jest poprawne");
    }
    else{
        echo("podane imię jest niepoprawne");
    }

    ?>

</body>
</html>