<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sorting an associative sort </h1>
    <?php
    $name=array("Hari"=>12,"Ram"=>10,"Pooja"=>23,"Arjun"=>11);
    asort($name);
    print_r($name);
    echo "<br>";
    arsort($name);
    print_r($name);

    ?>
</body>
</html>