<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

$username=$_POST['username'];
$email=$_POST['email'];
$pwd=md5($_POST['password']); 

try{
require_once('bd.php');
//verifie si l'email est déja existe
$verify=$pdo->prepare('SELECT * FROM signup WHERE email=:email');
$verify->execute(array('email'=>$email));
$verifedemail=$verify->fetchAll();

if(empty($verifedemail)){

    $query='INSERT INTO signup(username,email,pwd) value(?,?,?)';
    $userdata=$pdo->prepare($query);
    $userdata->execute([$username,$email,$pwd]);
    $userdata=null;
    $pdo=null;
    echo"sign up succesful";
    die();
   

}else{
    echo 'Lemail est déja existe';
}

}catch(PDOException $e){
    die('error'.$e->getmessage());
}
}else{
    header("location:../signup.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<div class="card m-4">
  <div class="card-header m-4">
    Featured
  </div>
  <div class="card-body m-4">
    <h5 class="card-title m-4">Email succeessful</h5>
    <a href="login.php" class="btn btn-primary m-4">Log in</a>
  </div>
</div>


</body>
</html>