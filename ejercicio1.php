<html>
<head>
<title>Comunidad</title>
</head>
<body>
<?php
//Declaro variables con numeros aleatorios
$pisos=rand(1,8);
$puertas=rand(1,5);
//Arrray con letras de las puertas
$letra = array("A", "B", "C", "D", "E", "F");
//For que ejecuta $i hasta que sea menor o igual al numero de pisos
   for ($i=1; $i <= $pisos; $i++) { 
   //For que ejecuta $j hasta que sea menor o igual al numero de puertas
      for ($j=0; $j <= $puertas; $j++) {
         //Envia por pantalla el piso mas el numero de elementos del array
         echo "Piso".$i."-Puerta".$letra[$j]."<br>";
      }
   }
?>
</body>
</html>