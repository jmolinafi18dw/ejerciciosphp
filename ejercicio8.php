<html>
<head>
<title>Piramide</title>
</head>
<body>
<?php 
//Numero randon entre 3 y 19
$numero = rand(3,19);
//If para que el numero siempre sea impar
    if($numero%2==0){
        $filas=$numero-1;
    }
    else {
        $filas=$numero;
    }
//For que se ejecuta hasta que $a sea menor o igual al numero de filas
        for($a=1;$a<=$filas;$a++){
//For que se envia espacios en blancos mientras $b sea menor que $filas
            for($b = 1;$b <= $filas-$a;$b++){
                echo "&nbsp";
            }
//For que escribe * mientras $c sea menor o igual que $a, el cual va sumando valor en su propio bucle
                for($c=1;$c<=$a;$c++){
                    echo "*";
                }
//Saltos de linea para que la piramide vaya cogiendo forma
        echo "<br />";
         }
 ?> 
</body>
</html>