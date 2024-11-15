<?php 
try{

$pdo=new PDO('mysql:host=localhost;dbname=partage_de_recette;charset=utf8','root');

}

catch(exception $e)
{
    die('error:'.$e->getmessage());
}
$query='SELECT * FROM recipes';
$myclientdata->prepare($query);
$myclientdata->execute();
$recipe=$myclientdata->fetchAll();

foreach($recipe as $recette){
echo $recette['recipe'];
}
