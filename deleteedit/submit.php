<?php
include('db.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){

$username=$_POST['username'];
$useremail=$_POST['email'];
$userpwd=$_POST['password'];

try {
    $querry="INSERT INTO useredit(username,pwd,email) values(?,?,?)";
    $userdata=$pdo->prepare($querry);
    $userdata->execute(array($username,$userpwd,$useremail));
    $pdo=null;
    $userdata=null;

   // header('location:/index.php');

} catch (PDOexption $e) {
    die('error'. $e->getmessage());
}

}else{
    header(location:'/index.php');
}