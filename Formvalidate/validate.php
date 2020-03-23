<?php

$name=$_POST['name'];

if(!preg_match("/^[a-zA-Z ]*$/",$name))
{
    echo "Name contains only letters and white space .";
}
else
{
    echo "My name is :".$name;
    echo "<br>";
    echo "My e-mail id is :".$_POST['email'];
}
?>