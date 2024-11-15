<?php
include('db.php');


$userid=$_POST["userid"];

$querry="DELETE FROM useredit WHERE id=:userid";
$userdata=$pdo->prepare($querry);
$userdata->execute(['userid'=>$userid]);
