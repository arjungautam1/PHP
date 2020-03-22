<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sorting by value and keys  </h1>
    <?php
    echo "Sorting by value :<br>";
    $name=array("Hari"=>12,"Ram"=>10,"Pooja"=>23,"Arjun"=>11);
    asort($name);//ascending
    print_r($name);
    echo "<br>";
    arsort($name);//descending
    print_r($name);
    echo "<br>";
    echo "Sorting by key :<br>";
    ksort($name);//ascending 
    print_r($name);
    krsort($name);//decending
    echo "<br>";
    print_r($name);

    ?>
</body>
</html>