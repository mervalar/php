 <?php

 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 </head>
 <body>
 <div class="row">
 <div class="col-lg-6 offset-2 bg-secondary mt-3">
 <form action="signup_submit.php" method="post">
 <div class="mb-3 m-4">
    <label for="exampleInputtext" class="form-label">username</label>
    <input type="text" class="form-control" id="exampleInputusername1" name="username">
  </div>
  <div class="mb-3 m-4" >
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 m-4">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="password">
  </div>
 
  <div class="mb-3 m-4 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary m-4 ">sign up</button>
  <button type="submit" class="btn btn-secondary m-4 "><a href="login.php">log in</a></button>
</form>
</div>
</div>
 </body>
 </html>