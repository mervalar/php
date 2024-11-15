<?php 
 $db='mysql:host=localhost;dbname=login_signup';
 $username='root';
 $password='';
try{
   
    $pdo= new PDO($db,$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (PDOExption $e){
   die('error'.$e->getmessage());
}