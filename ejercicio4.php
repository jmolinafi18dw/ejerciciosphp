<!DOCTYPE html>
<html>
<head>
<title>Palindroma</title>
</head>
<body>
<?php
//Array con palabras comunes
$letra = array("ordenador", "anona", "somos", "mesa", "alla", "bombon", "teclado", "oso", "mouse");
//Guardamos en $x la palabra randon del array $letra
$x=$letra[rand(0, 8)];
//Hacemos una reversa de la palabra
$y=strrev($x);
//Comparamos si $x es igual a $y
    if($x==$y){
        echo "La palabra ".$x." es Palindroma";
    } 
    else{
        echo "La palabra ".$x." no es Palindroma";
    }
?> 
 
</body>
</html>
