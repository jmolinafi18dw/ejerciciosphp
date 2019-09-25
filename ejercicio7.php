<html>
<head>
<title>Entero positivo</title>
</head>
<body>
<?php

for ($a=1; $a <= 3; $a++) {
    $numero=rand(5, 25);
    while ($numero > 1) {
        if($numero%2==0){
            $numero=$numero/2;
            }
            else {
            $numero=$numero*3+1;
            
                    }
            echo $numero."&nbsp"."&nbsp"."&nbsp";
            
    }
    echo "<br>";
    
}
   

    
                
        

?>
</body>
</html>