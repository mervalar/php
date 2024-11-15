<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$username=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["pswd"];

try{
  require_once "dbh_inc.php";  //C'est pour appel tout le data d'autre file (require,include, include_once) on peut utilise aussi
  
  $query="INSERT INTO users (firstName,email,pasw) VALUES (?,?,?);";
 
  $stmt=$pdo->prepare($query);
  $stmt->execute([$username,$email,$password]);
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