<html>
 <head>
  <title>Rango de edad</title>
 </head>
 <body>
 <?php
 //Variable numero aleatorio
 $i=rand(0, 100);
 //Sentencia que compara &i con un rango de valores
 switch ($i) {
    case (0 <= $i) && ($i <= 9):
        echo $i." Se encuentra entre 0 y 10 años";
        break;
    case (10 <= $i) && ($i <= 19):
        echo "El numero ".$i." esta en el rango de 10 a 20";
        break;
    case (20 <= $i) && ($i <= 29):
        echo "El numero ".$i." esta en el rango de 20 a 30";
        break;
    case (30 <= $i) && ($i <= 39):
        echo "El numero ".$i." esta en el rango de 30 a 40";
        break;
    case (40 <= $i) && ($i <= 49):
        echo "El numero ".$i." esta en el rango de 40 a 50";
        break;
    case (50 <= $i) && ($i <= 59):
        echo "El numero ".$i." esta en el rango de 50 a 60";
        break;
    case (60 <= $i) && ($i <= 69):
        echo "El numero ".$i." esta en el rango de 60 a 70";
        break;
    case (70 <= $i) && ($i <= 79):
        echo "El numero ".$i." esta en el rango de 70 a 80";
        break;
    case (80 <= $i) && ($i <= 89):
        echo "El numero ".$i." esta en el rango de 80 a 90";
        break;
    case (90 <= $i) && ($i <= 100):
        echo "El numero ".$i." esta en el rango de 90 a 100";
        break;
    default:
        echo "No se encuentra en el rango de 0 a 100";
}
 ?>
 </body>
</html>