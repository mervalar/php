<?php 
$db="mysql:host=localhost;dbname=conectiontest";
$username="root";
$psw="";

try{

    $pdo=new PDO($db,$username,$psw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOExption $e){
 die("connection error".$e->getMessage());
}