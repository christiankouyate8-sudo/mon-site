<?php 
$color= "reds";
$colors= "blue";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:
             <?php
                if ($color=='red') {
                    echo $color;
                } else {
                    echo $colors;
                    echo"Bienvenue a vous !";
                }
                
                ?>;
        }
    </style>
</head>
<body>
    <h1>
        <?php
         if ($color=='red'){
            echo "la page est rouge";
         }else{
            echo"la page est bleue";
<<<<<<< HEAD
            
=======
             echo"Bienvenue a vous !";
>>>>>>> 5f258d897933e7dd5e6a256145ab802181f2212f
         }
        ?>
    </h1>
</body>
</html>
