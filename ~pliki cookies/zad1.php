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
setcookie("odwiedziny", "Witamy", time()+60*5);

if(isset($_COOKIE['odwiedziny']))
   echo "Witaj ponownie";
else
   echo "Dzień dobry. Nasza strona obsługuje ciasteczka";

?>

</body>
</html>