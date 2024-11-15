<?php
try{
    $db='mysql:host=localhost;dbname=myfirstdatabase;charset=utf8,root';
    $pdo=new PDO($db,$username,$psw);
}

catch(exception $e)
{
 die('error'.$e->getmessage());
}

$query='INSERT INTO test(username,psw,useremail) VALUE (?,:psw,:useremail)';
$user= $pdo->prepare($query);
$user->execute($_POST['username'],$_POST['psw'],$_POST['useremail']);
die();
