<?php
include('db.php');

$userid=$_POST['userid'];
$username=$_POST['username'];
$useremail=$_POST['email'];
$data=['username'=>$username,
       'email'=>$useremail,
       'id'=>$userid
];
$querry="UPDATE useredit set username=:username,email=:useremail WHERE id=:userid";

$userdata=$pdo->prepare($querry);
$userdata->bindParam(':userid', $data['id']);
$userdata->bindParam(':username', $data['username']);
$userdata->bindParam(':useremail', $data['email']);
$userdata->execute();

$pdo=null;
$userdata=null;