<?php
include('db.php');

$userid=$_POST['userid'];

$querry="SELECT* FROM useredit WHERE id=:userid";
$userdata=$pdo->prepare($querry);
$userdata->execute(['userid'=>$userid]);
$getinfos=$userdata->fetch();
//foreach($getinfos as $userinfo){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><b>signup</b></p>
    <form action="editSubmit.php" method="post">
        <input type="text" name="username" value="<?php echo $getinfos["username"]; ?>"><br><br>
        <input type="email" name="email" placeholder="your email" value="<?php echo $getinfos["email"]; ?>"><br><br>
        <input type="password" name="password" placeholder="your password" value="<?php echo $getinfos["pwd"]; ?>"><br><br>
        <input type="hidden" name="userid" value="<?php echo $userid;?>">
        <button>sibmit</button><br><br><br>

        <?php
          
        
        ?>
</body>
</html>