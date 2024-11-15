<?php  include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><b>signup</b></p>
    <form action="submit.php" method="post">
        <input type="text" name="username" placeholder="your username"><br><br>
        <input type="email" name="email" placeholder="your email"><br><br>
        <input type="password" name="password" placeholder="your password"><br><br>
        <button>sibmit</button><br><br><br>

    </form>

    <table>
        <tr>
            <th>username</th>
            <th>email</th>
            <th>delete</th>
            <th>edit</th>
        </tr>
        <?php     
         $querry="SELECT* FROM useredit";
         $userdata=$pdo->prepare($querry);
         $userdata->execute();
         $getinfos=$userdata->fetchAll();
         foreach($getinfos as $userinfo){
        ?>
       <tr>
         <td><?php echo $userinfo["username"] ?></td>
         <td><?php echo $userinfo["email"] ?></td>

         <td><form action="edit.php" method="post">
         <input type="hidden" name="userid" value="<?php echo $userinfo['id'];?>">
          <button>edit</button>
         </form>
        </td>
        
         <td> <form action="delete.php" method="post">
            <input type="hidden" name="userid" value="<?php echo $userinfo['id'];?>">
            <button>delete</button>
            </form>
         </td>
         
         <?php } ?>
        </tr>

        </table>
</body>
</html>