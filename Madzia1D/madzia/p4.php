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
    podaj datę swoich urodzin:<input type="text" name="wpis">
    <input type="submit" value="wyślij">
  </form>

  <?php
    $wpis=$_POST["wpis"];
    $data=date("d-m");
    echo("<br> Dziś jest$data </br>");
    if($wpis==$data)
    {echo("Wszystkiego najlepszego!!");}
    else{echo("Nie dostaniesz dzisiaj prezentu :((");}

    ?>

</body>
</html>