<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//fonction de chien de characters(string)
$string="Hello world";
echo strlen($string);
echo "<br>";
echo strpos($string,"o"); //posision de lettre
echo "<br>";
echo str_replace("world","merval",$string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo substr($string,2,5);// coupe le string depuis 2eme on compte 5 element et on coupe
echo "<br>";
print_r( explode(" ",$string)); //fair un array

//fonction de mathematique
$number=-5.5;
echo abs($number);
echo "<br>";
echo round($number);
echo "<br>";
echo sqrt(64);
echo "<br>";
echo pow(4,6);
echo "<br>";
echo rand(1,100); //any random number in btn
echo "<br>";

//fonction de array
$fruit=["banana","apple","pinaple"];

echo is_array($fruit);
echo "<br>";
echo count($fruit);
echo "<br>";
array_push($fruit,"kiwi");
print_r($fruit);
echo "<br>";
array_pop($fruit);
print_r($fruit);//que la dernier peut etre suprime
echo "<br>";


//fonction de temps
echo date("Y-m-d H:i:s");

?>
</body>
</html>
