<?php
$query='insert into recipes(title, recipe, author, is_enabled) values (:title, :recipe, :author, :is_enabled)';
$mydbdata=$pdo->prepare($query);
$mydbdata->execute([
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : Des flageolets ! Etape 2 : Euh ...',
    'author' => 'contributeur@exemple.com',
    'is_enabled' => 1,
]);
$mydbdata->fetchAll();
foreach($mydbdata as $receips){
    echo $receips['title'];
}

