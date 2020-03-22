<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sorting an array</h1>
    <?php
    //declaration 
    $color=array("Hari","Ram","Sita","Gita","Pooja");
    sort($color);   //Ascending order 
    print_r($color);
    echo "<br>";
    rsort($color);//Descending order 
    print_r($color);
    ?>

</body>
</html>