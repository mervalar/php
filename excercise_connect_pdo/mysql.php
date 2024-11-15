<?php
try{

    $pdo=new PDO('mysql:host=localhost;dbname=partage_de_recettes;charset=utf8,root');

}catch(exception $e){
 
    die('error:'.$e->getmessage());

}