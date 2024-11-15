<?php 
$recipe=[
[
    'tittle'=>"hello world",
    'author'=>"mir@gmail.com",
    'is_enabled'=>true,

],
 [
    'tittle'=>"hello world",
    'author'=>"mir@gmail.com",
    'is_enabled'=>false,

]
];

function RecipesValid(array $recipe):bool{
    foreach($receips as $recipe ){
        if($receipe['is_enabled']){
            echo'$receipe['title'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>veryfy</p>
    <ul>
    <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true) : ?>
   <li> <?php echo("hello".$recipe['title'].''.$recipe['author']); ?> </li>
   <?php echo $recipe['title']; ?>
   <?php endif; ?>
   <?php $date=date('d/m/Y');?>
   <?php echo 'todays day is'.$date;?>
    </ul>
</body>
</html>