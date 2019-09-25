<html>
<head>
<title>Piramide</title>
</head>
<body>
<?php 

$numero = rand(3,19);
if($numero%2==0){
    $filas=$numero-1;
}
else {
    $filas=$numero;
}
for($a=1;$a<=$filas;$a++){

    for($b = 1;$b <= $filas-$a;$b++)
    {
        echo "&nbsp";
    }

    for($c=1;$c<=$a;$c++)
    {
        echo "*";
    }
    echo "<br />";
    }

 ?> 
</body>
</html>