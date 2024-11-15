<?php 
try{

$pdo=new PDO('mysql:host=localhost;dbname=partage_de_recettes;charset=utf8','root',);

}

catch(exception $e)
{
    die('error:'.$e->getmessage());
}
$query='SELECT * FROM recipes';
$query1='SELECT * FROM recipes WHERE is_enabled=true';
$query2='SELECT * FROM recipes ORDER BY title';

$myclientdata=$pdo->prepare($query);
$myclientdata->execute();
$receips=$myclientdata->fetchAll();
foreach($receips as $recette){
    echo $recette['author']."\n";
    }

$myclientdata1=$pdo->prepare($query1);
$myclientdata1->execute();
$receips1=$myclientdata1->fetchAll();

foreach($receips1 as $recette1){
echo $recette1['recipe_id'];
}

$myclientdata2=$pdo->prepare($query2);
$myclientdata2->execute();
$receips2=$myclientdata2->fetchAll();

foreach($receips2 as $recette2){
    echo $recette2['title'];
    }


    //affiche le recette avec des varriable nome ou non-nomme

$query3='SELECT * FROM recipes where author=:variableAuthor AND is_enabled=:is_enabled';
$myclientdata3=$pdo->prepare($query3);
$myclientdata3->execute([
    'variableAuthor'=>'mickael.andrieu@exemple.com',
    'is_enabled'=>'1'
]);
$receips3=$myclientdata3->fetchAll();

foreach($receips3 as $recette3){
    echo $recette3['title'];
    }
