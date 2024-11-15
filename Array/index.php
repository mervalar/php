<?php
// quand on a nomerator array
$fruit= ["apple","mango","ananas"];
echo $fruit[0];
echo "<br>";

//quand on specifie notre cle
$task=[
    "laudery"=>"didy","yvette",
    "cook"=>"meri","lif",
    "trash"=>"beda","soso"
];
echo $task["cook"];
echo "<br>";

//quelque built-in fonction pour les array

echo print_r($task);
echo "<br>";
echo count($task);
echo "<br>";
echo sort($task);
echo "<br>";

//ajoute un valeur dans notre array
array_push ($fruit,"melon");
print_r($fruit);
echo "<br>";

$task["cleaning"]="fisto";
print_r($task);
echo "<br>";

//Multi-Arrays

$food=[
    "meat"=> array("fish","pig"),
    "drinks"=> array("vine","coca")
];
print_r($food);