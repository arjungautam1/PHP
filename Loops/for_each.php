<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Using for each loop in php</h1>

    <?php
    $colors=array("Green","Blue","Black");
    foreach($colors as $value)
    {
        echo "$value <br>";
    }
    ?>
</body>
</html>