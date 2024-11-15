<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="message.php" method="Get">
     <p>Laissez votre message</p>
    <input type="text" placeholder="insert votre nom" name="nom"><br><br>
    <input type="text" placeholder="insert votre email" name="email"><br><br>
    <input type="text" placeholder="insert votre message" name="message"><br><br>
    <button>envoye</button>
  </form>
  <?php echo $_SESSION['msg'];?><br>
</body>
</html>