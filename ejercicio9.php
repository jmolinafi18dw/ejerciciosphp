<html>
<head>
<title>Comision</title>
</head>
<body>
<?php
//Iniciacion de variables
$ventas=rand(0,50000);
$comision=0;
//Si ventas es menor de 10000 se le da un importe extra de 5%
    if ($ventas < 10000) {
        $comision=$ventas*1.05;
        echo "El vendedor tienen un comision de ".$comision."€ por la venta de ".$ventas."€";
    }
//Si ventas esta entre 10000 y 20000 se le da un importe extra de 8%
    elseif (($ventas >= 10000) && ($ventas <= 20000)) {
        $comision=$ventas*1.08;
        echo "El vendedor tienen un comision de ".$comision."€ por la venta de ".$ventas."€";
    }
//Si ventas esta entre 20000 y 40000se le da un importe extra de 10%
    elseif (($ventas >= 20000) && ($ventas <= 40000)) {
        $comision=$ventas*1.10;
        echo "El vendedor tienen un comision de ".$comision."€ por la venta de ".$ventas."€";
    }
//Si ventas es mayor de 40000 se le da un importe extra de 13%
    elseif ($ventas > 40000) {
        $comision=$ventas*1.13;
        echo "El vendedor tienen un comision de ".$comision."€ por la venta de ".$ventas."€";
    }
?>
</body>
</html>