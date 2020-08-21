<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
include('./config/dbconfig.php');
$ref='questions/';
$questions=$database->getReference($ref)->getValue();
foreach($questions as $key=>$row)
{
    $response[$key]["op1"]=$row['op1'];
    $response[$key]["op2"]=$row['op2'];
    $response[$key]["op3"]=$row['op3'];
    $response[$key]["op4"]=$row['op4'];
    $response[$key]["op5"]=$row['op5'];
    $response[$key]["op6"]=$row['op6'];
    $response[$key]["op7"]=$row['op7'];
    $response[$key]["question"]=$row['question'];
    $data[]=$response[$key];
}

?>