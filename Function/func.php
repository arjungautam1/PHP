<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Using function in php</h1>
    <?php

    //function defination 
    function add($num1,$num2)
    {
        $sum=$num1+$num2;
        echo "Sum of the numbers is :".$sum;
    }
    add(10,20); //functin call 
    ?>
</body>
</html>