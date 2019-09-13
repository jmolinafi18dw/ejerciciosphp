<html>
<head>
<title>Multiplos de 3</title>
</head>
<body>
<?php
$numero=rand(1,25);
for($i=0;$i<=25;$i++){
	if($i%$numero==0){
    echo $i." es múltiplo de ".$numero;
    echo "<br>";
    }
    else {
    echo $i." no es múltiplo de ".$numero;
    echo "<br>";
    }
}
?>
</body>
</html>