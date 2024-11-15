<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$username=$_POST["name"];
$passwords=$_POST["pswd"];

try{
  require_once "dbh_inc.php";  //C'est pour appel tout le data d'autre file (require,include, include_once) on peut utilise aussi
  
  $query="DELETE FROM users WHERE id=10";
 
  $stmt=$pdo->prepare($query);
 
  //$stmt-> bindparam(':username',$username);
  //$stmt-> bindparam(':passwords',$pasw);
  $stmt->execute();
  
  $pdo=null;
  $stmt=null;
  header("location:../index.php");
  die(); // or exit()

}catch(PDOexception $e){
    die("Query message:".$e->getMessage());

}

}else{
    header("location:../index.php");
}