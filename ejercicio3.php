<html>
 <head>
  <title>Rango de numeros</title>
 </head>
 <body>
 <?php
 $i=rand(0, 100);
 switch ($i) {
    case (0 <= $i) && ($i <= 9):
        echo "El numero ".$i." esta en el rango de 0 a 9";
        break;
    case (10 <= $i) && ($i <= 19):
        echo "El numero ".$i." esta en el rango de 10 a 19";
        break;
    case (20 <= $i) && ($i <= 29):
        echo "El numero ".$i." esta en el rango de 20 a 29";
        break;
    case (30 <= $i) && ($i <= 39):
        echo "El numero ".$i." esta en el rango de 30 a 39";
        break;
    case (40 <= $i) && ($i <= 49):
        echo "El numero ".$i." esta en el rango de 40 a 49";
        break;
    case (50 <= $i) && ($i <= 59):
        echo "El numero ".$i." esta en el rango de 50 a 59";
        break;
    case (60 <= $i) && ($i <= 69):
        echo "El numero ".$i." esta en el rango de 60 a 69";
        break;
    case (70 <= $i) && ($i <= 79):
        echo "El numero ".$i." esta en el rango de 70 a 79";
        break;
    case (80 <= $i) && ($i <= 89):
        echo "El numero ".$i." esta en el rango de 80 a 89";
        break;
    case (90 <= $i) && ($i <= 99):
        echo "El numero ".$i." esta en el rango de 90 a 99";
        break;
    case (100 == $i):
        echo "El numero ".$i." esta en el rango de 100";
        break;
    default:
        echo "No se encuentra en el rango de 0 a 100";

}
 ?>
 </body>
</html>