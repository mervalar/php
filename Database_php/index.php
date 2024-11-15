<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>sign-up form</p>
    <form action="includes/formhandle.inc.php" method="post">
        <label for="name">fullname</label>
        <input type="text" name="name"><br>
        <label for="name">email</label>
        <input type="text" name="email"><br>
        <label for="name">password</label>
        <input type="text" name="pswd"><br>
        <button>sign up</button>
    </form>
    <p>Upate form</p>
    <form action="includes/updateform.inc.php" method="post">
        <label for="name">fullname</label>
        <input type="text" name="name"><br>
        <label for="name">email</label>
        <input type="text" name="email"><br>
        <label for="name">password</label>
        <input type="text" name="pswd"><br>
        <button>update</button>
    </form>

    <p>Delete form</p>
    <form action="includes/deleteform.inc.php" method="post">
        <label for="name">fullname</label>
        <input type="text" name="name"><br>
        <label for="name">password</label>
        <input type="text" name="pswd"><br>
        <button>Delete</button>
    </form>
</body>
</html>