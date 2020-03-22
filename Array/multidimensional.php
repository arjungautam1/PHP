<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Using multidimensional array
    $friend=array(
        array(
            "name"=>"Pooja",
            "email"=>"poojapoudel@gmail.com",      
        ),
        array(
            "name"=>"Arjun",
            "email"=>"laserarjun@gmail.com",
        )
        );

        echo "My love ,my heart ".$friend[0]["name"]." send me message on ".$friend[1]["email"]." she is on fire now ";


    ?>
</body>
</html> 