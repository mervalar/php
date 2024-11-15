<?php
$userid=$_GET["userid"];

include('includes/db.inc.php');

$userdata=$pdo->prepare('SELECT *FROM signup WHERE id=:userid');
$userdata->execute(Array(':userid'=>$userid));
$getuserdata=$userdata->fetch();


//echo"<pre>";
//print_r($getuserdata);
//die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>sign up form</p>
<form action="includes/formConnect.php" method="post">
    <label for="username">username</label>
    <input type="text" name="username" value="<?php echo $getuserdata["username"] ?>"><br>
    <label for="password">password</label>
    <input type="text" name="passwords" value="<?php echo $getuserdata["psw"] ?>"
    ><br>
    <button>sign up</button><br><br><br>
</form>
</body>
</html>
