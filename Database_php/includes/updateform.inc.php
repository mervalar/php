<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$username=$_POST["name"];
$email=$_POST["email"];
$passwords=$_POST["pswd"];

try{
  require_once "dbh_inc.php";  //C'est pour appel tout le data d'autre file (require,include, include_once) on peut utilise aussi
  
  $query="UPDATE users SET firstName= :username ,email= :email, pasw=:passwords where id=2;";
 
  $stmt=$pdo->prepare($query);
  $stmt-> bindparam(':username',$firstName);
  $stmt-> bindparam(':email',$email);
  $stmt-> bindparam(':passwords',$pasw);
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