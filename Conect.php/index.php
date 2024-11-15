<?php
include('includes/db.inc.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--  création d'un formulaire-->

    <p>sign up form</p>
    <form action="includes/formConnect.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username"><br>
        <label for="password">password</label>
        <input type="text" name="passwords"><br>
        <button>sign up</button><br><br><br>
    </form>
   <!--  creation d'une tableau-->

    <table>
        <tr>
            <th>username</th>
            <th>password</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        <?php 
             //to displayy data from db to site 
            $userdata=$pdo->prepare('SELECT *FROM signup');
            $userdata->execute();
            $getuserdata=$userdata->fetchAll();

            foreach($getuserdata as $getdata){

          // echo "<pre>";
            //print_r($getuserdata);
            //die();
            ?>
        <tr>
            <td>
                <?php echo $getdata['username'] ?>
            </td>
            <td><?php echo $getdata['psw'] ?></td>
            
            <td><a href="edit.php?userid=<?php echo $getdata['id'] ?>"><button>edit </button> </a></td>

            
            <td><form action="delete.php" method="post">
                 <input type="hidden" name="userid" value="<?php echo $getdata['id'] ?>">
                 <button type="submit">delete</button>
            </form></td>
        </tr> 
        <?php } ?>
    </table>
</body>
</html>