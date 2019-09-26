<html>
<head>
<title>Tienda on line</title>
</head>
<body>
<?php
//Importe aleatorio de la compra
$total_compra=rand(1,100);
//Array del tipo de compra
$pedido = array("mascota", "ropa");
$tipo_compra=$pedido[rand(0, 1)];
//variables que contienen los importes de envio
$t_compra_m=$total_compra*1.10;
$t_compra_rM=$total_compra*1.21;
$t_compra_rm=$total_compra*1.21+9;
//Condiciones de los pedidos si son menores de 50
    if (($tipo_compra=="mascota") && ($total_compra<50)) {
        echo "No se puede realizar el envio";
    }
    elseif (($tipo_compra=="ropa") && ($total_compra<50)) {
        echo "Los gastos de envio son 9 euros, Su total es ".$t_compra_rm."€";
    }
//Condiciones de los pedidos si son mayores de 50
    elseif (($tipo_compra=="ropa") && ($total_compra>=50)) {
        echo "Los gastos de envio son gratis, Su total es ".$t_compra_rM."€";
    }
    elseif (($tipo_compra=="mascota") && ($total_compra>=50)) {
        echo "Los gastos de envio son gratis, Su total es ".$t_compra_m."€";
    }
?>
</body>
</html>