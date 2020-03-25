<?php

$name=$_POST['name'];

if(!preg_match("/^[a-zA-Z ]*$/",$name))
{
    echo "Name contains only letters and white space .";
}
else
{
    echo "My name is :".$name;
}
$email=$_POST['email'];
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo("<br>$email is a valid email address .");
}
else 
{
    echo("<br>$email is not a valid email address. ");
}
?>