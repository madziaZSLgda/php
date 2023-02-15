<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method = "POST">
        podaj liczbe<input type = "number" name = "liczba"><br>
        <input type = "submit" value = "zmien na slowa">
    </form>

<?php
$liczba=$_POST["liczba"];
for($i=1;$i<=strlen($liczba);$i++);
//if($liczba=1)
{
switch($liczba[$i]){
case '1':
    $liczba = "Jeden";
    break;
}
}
($liczba=2)
{
switch($liczba[$i]){
case '2':
    $liczba = "Dwa";
    break;
}
}
($liczba=3)
{
switch($liczba[$i]){
case '3':
    $liczba = "Trzy";
    break;
}
}
($liczba=4)
{
switch($liczba[$i]){
case '4':
    $liczba = "Cztery";
    break;
}
}
if($liczba=5)
{
switch($liczba[$i]){
case '5':
    $liczba = "Pięć";
    break;
}
}
if($liczba=6)
{
switch($liczba[$i]){
case '6':
    $liczba = "Sześć";
    break;
}
}
if($liczba=7)
{
switch($liczba[$i]){
case '7':
    $liczba = "Siedem";
    break;
}
}
if($liczba=8)
{
switch($liczba[$i]){
case '8':
    $liczba = "Osiem";
    break;
}
}
if($liczba=9)
{
switch($liczba[$i]){
case '9':
    $liczba = "Dziewięć";
    break;
}
}




    // switch($liczba){
    //     case '1':
    //     $liczba = "Jeden";
    //     break;
    // case '2':
    //     $liczba = "Dwa";
    //     break;
    // case '3':
    //     $liczba = "Trzy";
    //     break;
    // case '4':
    //     $liczba = "Cztery";
    //     break;
    // case '5':
    //     $liczba = "Pięć";
    //     break;
    // case '6':
    //     $liczba = "Sześć";
    //     break;
    // case '7':
    //     $liczba = "Siedem";
    //     break;
    // case '8':
    //     $liczba = "Osiem";
    //     break;
    // case '9':
    //     $liczba = "Dziewięć";
    //     break;
    // }

echo ("$liczba")
?>
    
</body>
</html>
