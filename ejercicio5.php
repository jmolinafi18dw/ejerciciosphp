<html>
<head>
<title>Parque</title>
</head>
<body>
<?php
$edad=rand(0,17);
$altura=rand(50,200);
$acompañado=rand(true,false);
if (($edad >= 10) || ($altura >= 120)) {
    echo "El niño tiene ".$edad." años y/o mide ".$altura." cm";
}
elseif (($acompañado=true) && ($edad >= 6)) {
    echo "El niño viene acompañado y tiene ".$edad." años";
}
else {
    echo "El niño no cumple las condiciones de seguridad";
}
?>
</body>
</html>