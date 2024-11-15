<?php
$db="mysql:host=localhost;dbname=editanddelete";
$username="root";
$password="";

try {
    $pdo=new PDO($db,$username,$password);

} catch (PDOexption $e) {
   die('error'. $e->getmessage());
}