<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Using do while loop in php</h1>
    <?php
    echo "Numbers from 1 to 5 :<br>";
    $x=1;
    do{
        echo $x;
        echo "<br>";
        $x++;
    }
    while($x<=5);
    ?>
</body>
</html>