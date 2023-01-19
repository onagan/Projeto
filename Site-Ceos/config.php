<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$username="teste2";
$password="";
$server="25.84.164.120";
$database="ceos";

$link = mysqli_connect("$server","$username","$password", "$database");

if(!$link)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
</body>
</html>