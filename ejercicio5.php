<html>
<head>
<title>Parque</title>
</head>
<body>
<?php
//Variablez con numero aleatorio
$edad=rand(3,17);
$altura=rand(50,200);
//Booleano que devuelve si el niño viene acompañado
$acompañado=rand(true,false);
//Si se cumple una de las condiones el niño puede acceder
    if (($edad >= 10) || ($altura >= 120)) {
        echo "El niño tiene ".$edad." años y/o mide ".$altura." cm, puede acceder";
    }
//Si se cumplen las 2 condiciones el niño tiene acceso
    elseif (($acompañado=true) && ($edad >= 6)) {
        echo "El niño viene acompañado y tiene ".$edad." años, puede acceder";
    }
    else {
        echo "El niño no cumple las condiciones de seguridad";
    }
?>
</body>
</html>