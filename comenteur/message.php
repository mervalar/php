<?php
session_start();

$_SESSION['msg']=$_GET['nom'];

if(!isset($_GET["nom"]) || empty( $_GET["message"] ) || !filter_var( $_GET["email"],FILTER_VALIDATE_EMAIL)){
    echo"veillez remplir tout les spaces vide";
}else
{
    echo "Votre message a etais bien reçu";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <b><p>E-mail:</p></b><?php echo $_GET["email"];?><br>
    <b><p>nom:</p></b><?php echo $_GET["nom"];?><br>
    <b><p>meassage:</p></b><?php echo $_GET["message"];?>
    
     <?php echo Date('d/m/Y:H/i');?><br>
</body>
</html>