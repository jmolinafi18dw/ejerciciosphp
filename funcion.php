<html>
<head>
    <title>Funciones</title>
</head>
<body>
<?php


function resta($n1,$n2){
    return $n1 - $n2;
}
function suma($n1,$n2){
    return $n1 + $n2;
}
function division($n1,$n2){
    return $n1 / $n2;
}
function multi($n1,$n2){
    return $n1 * $n2;
}

function enviar($operacion,$n1,$n2){
    $resulenviar= $operacion($n1, $n2);
    return $resulenviar;
}

$resultado=enviar("multi", 8, 2);

echo $resultado;

?>
</body>
</html>