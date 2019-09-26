<html>
<head>
<title>Entero positivo</title>
</head>
<body>
<?php
//Numero aleatorio entre 5 y 25
$numero=rand(5, 25);
//Mientras numero sea mayor a 1 el bucle se ejecutara
    while ($numero > 1) {
//Si el resultado es 0 el numero se dividira entre si mismo y cambiara el valor
//Si no, es impar y el numero cogera el valor de si mismo por 3 mas 1
        if($numero%2==0){
            $numero=$numero/2;
        }
        else {
        $numero=$numero*3+1;
//Espacios para separar los resultados
        }
        echo $numero."&nbsp"."&nbsp"."&nbsp";       
    }
    

   

    
                
        

?>
</body>
</html>