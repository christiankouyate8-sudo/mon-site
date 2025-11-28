<?php
 $color="black";
 $colors="green";
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
                 if ($color=='blacks') {
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
        if ($color=='black') {
          echo"la page est noire ";
        } else {
            echo"la page est verte";
        }
        
        ?>
    </h1>
</body>
</html>