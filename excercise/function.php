<?php
$users=[
    ['firstname'='>ig beda',
    'email'=>"ig@gmail.com",
    'age'=>32   
   ],
   [
    'firstname'='>ig didy',
    'email'=>"igdidi@gmail.com",
    'age'=>28   
   ],
   [
    'firstname'='>ig yvette',
    'email'=>"igyvette@gmail.com",
    'age'=>27   
   ];

   $recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];

  function displayAuthor(string $userEmail, array $users):string{
    foreach($users as $user){
        if($userEmail===$user['email']){
            echo $user['firstname'].$user['email'];
        }
    }
  }

  function isValidRecipe(array $recipes):bool{
   if(array_key_exists('is_enabled', $recipes)){
    $valid=$recipes['is_enabled'];
   }else{
    $valid=false;
   }
   return  $valid;
  }

]

function displayAuthor(array $recipes):string{
    
    for ($author=0; $author <=3 ; $author++) { 
        $author=$recipes['author'];
      print $author;
    }
}
 ?>