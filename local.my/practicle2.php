<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

//echo date('m.d.Y H:i',mktime(14,10,0,10,7,2018));
//echo mt_rand();
echo getrandmax() . '<br>';
include 'practicle.php';
function foo()
{
     global $color;
     global $fruit;

    include 'practicle.php';

    echo "Одно $color $fruit";
}

echo "One $color $fruit";

