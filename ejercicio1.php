<html>
<head>
<title>Comunidad</title>
</head>
<body>
<?php
$pisos=rand(1,8);
$puertas=3;
$letra = array("A", "B", "C", "D");
for ($i=1; $i <= $pisos; $i++) { 
   for ($j=0; $j <= $puertas; $j++) {
        echo "Piso".$i."-Puerta".$letra[$j]."<br>";
   }
}
?>
</body>
</html>