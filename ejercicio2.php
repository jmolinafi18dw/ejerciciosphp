<html>
 <head>
  <title>Mayor</title>
 </head>
 <body>
 <?php
 //Declaracion de 5 variables con numero aleatorio
$n1=rand(0,100);
$n2=rand(0,100);
$n3=rand(0,100);
$n4=rand(0,100);
$n5=rand(0,100);
//Nueva variable que contiene el resultado de la funcion max
$nmax=max($n1, $n2, $n3, $n4, $n5);
echo "El numero mayor es ".$nmax
 ?>
 </body>
</html>