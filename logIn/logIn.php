
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=logIn.php method="post">
        <label for="">username</label>
        <input type="text" name="username">
        <label for="">password</label>
        <input type="password" name="password">
        <button>log in</button>
    </form>
    <?php
if(isset($_POST ['username']) && isset($_POST ['password'])){ 
    echo"Bienvienue ".$username."!";
}else{ 
    echo "veillez remplir votre nom et password";
}
?>
</body>
</html>