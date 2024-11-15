<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
$usernamee=$_POST["username"];
$password=$_POST["passwords"];

if (empty($usernamee) ) {
  # code...
  echo "<script> alert('username is required') </script>";
  header("location:../index.php");
 
}
elseif (empty($password)) {
 echo "<script> alert('password is required') </script>";
 header("location:../index.php");
}
else{
  try{
    require_once("db.inc.php");

    $query="INSERT INTO signup (username,psw) VALUES (?,?);";
     
  //  $query1= "UPDATE INTO signup SET username:username,pswd=:passwords WHERE id=1";
 
  $stmt=$pdo->prepare($query);
  $stmt->execute([$usernamee,$password]);
  $pdo=null;
  $stmt=null;
  header("location:../index.php");
  die(); // or exit()

}catch(PDOException $e){
 die("Query failed".$e->getMessage());
}
}


}else{
    header("location:includes/index.php");
}
?>