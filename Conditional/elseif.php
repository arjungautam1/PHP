<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Program to compare 3 numbers using elseif</h1>
    <?php
    $x=1;
    $y=10;
    $z=20;
    if($x>$y)
    {
        if($x>$z)
        {
            echo "x is the greatest number";
        }
        else
        {
            echo "z is the greatest number";
        }
        
    }
    else if($y>$z)
    {
        echo "y is the greatest ";
    }
    else
    {
        echo "z is the greatest ";
    }
    ?>
</body>
</html>