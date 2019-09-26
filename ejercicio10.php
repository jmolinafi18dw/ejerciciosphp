<html>
<head>
<title>Tienda on line</title>
</head>
<body>
<?php
$total_compra=rand(1,100);
$tipo_compra="ropa";
$t_compra_m=$total_compra*1.10;
$t_compra_rM=$total_compra*1.21;
$t_compra_rm=$total_compra*1.21+9;

if (($tipo_compra=="mascota") && ($total_compra<50)) {
    echo "No se puede realizar el envio";
    }
elseif (($tipo_compra=="ropa") && ($total_compra<50)) {
    echo "Los gastos de envio son 9 euros, Su total es ".$t_compra_rm."€";

    }
elseif (($tipo_compra=="ropa") && ($total_compra>=50)) {
    echo "Los gastos de envio son gratis, Su total es ".$t_compra_rM."€";
        }
elseif (($tipo_compra=="mascota") && ($total_compra>=50)) {
    echo "Los gastos de envio son gratis, Su total es ".$t_compra_m."€";
            }
?>
</body>
</html>