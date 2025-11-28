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
         }
        ?>
    </h1>
</body>
</html>