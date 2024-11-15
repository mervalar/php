<?php
include('includes/db.inc.php');

try {
    $userid=$_POST['userid'];
    $userdata=$pdo->prepare('DELETE FROM signup WHERE id=:userid');
    $userdata->execute(array('userid'=> $userid));
    
    header("location:index.php");
} catch (PDOexption $e) {
    die();
}
