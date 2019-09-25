<html>
<head>
<title>Comision</title>
</head>
<body>
<?php
$ventas=rand(0,50000);
$comision=0;
if ($ventas < 10000) {
    $comision=$ventas*1.05;
    echo "El vendedor tienen un comision de ".$comision."€ por la venta de ".$ventas."€";
}
elseif (($ventas >= 10000) && ($ventas <= 20000)) {
    $comision=$ventas*1.08;
    echo "El vendedor tienen un comision de ".$comision."€ por la venta de ".$ventas."€";
}
elseif (($ventas >= 20000) && ($ventas <= 40000)) {
    $comision=$ventas*1.10;
    echo "El vendedor tienen un comision de ".$comision."€ por la venta de ".$ventas."€";
}
elseif ($ventas > 40000) {
    $comision=$ventas*1.13;
    echo "El vendedor tienen un comision de ".$comision."€ por la venta de ".$ventas."€";
}
?>
</body>
</html>