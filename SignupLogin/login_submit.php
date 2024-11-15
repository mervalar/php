
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
       include('bd.php');
       $email=$_POST['email'];
       $pwd=md5($_POST['password']);
       
       //verifiez si l'email et pasword sont existe
       $getquery=$pdo->prepare("select * from signup where email=:email AND pwd=:pwd");
       $getquery->execute(array('email'=>$email,'pwd'=>$pwd));
       $getdatas=$getquery->fetchAll();
     if(!empty( $getdatas)){    
?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Log in successful</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">hello   <?php echo $username?> </h6>
    <p class="card-text">welcome to our learning center.</p>
  </div>
  <?php 
  }
  else{ ?>  
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Log in unsuccessful</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">wrong email ou password   </h6>
    <a href="login.php" class="btn btn-primary m-4">try again</a>
  </div>
  <?php  } ?>  
</div>
</body>
</html>