<html>
<head>
<title>Potencias</title>
</head>
<body>
<?php
//Iniciacion de la variable $a y $c
$a=1;
$c=rand(4, 10);
//Ejecutar el bucle mientras $a sea menor o igual que 4
//Devuelve el valor de $ mas la potencia, ademas va sumando 1 a la variable
    do {$b= (pow($a, 3));
        echo $a."-".$b."<br>";
        $a++;
    }while ($a <= $c);
?>
</body>
</html>