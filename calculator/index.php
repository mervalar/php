<?php
if($_SERVER['REQUEST_METHOD']=='get'){
$firstnbr=$_GET['firstnmber'];
$secondnbr=$_GET['secondnmber'];
$operator=$_GET['select'];

echo"hello";
switch($operator){
  case 'plus':
   
 echo $_GET['firstnmber'] + $_GET['secondnmber'];
 break;
 }
}
else{

  header('index.php');
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
     <form action="index.php" action="GET">

       <input type="text" placeholder="enter first number" name="firstnmber"><br><br>
       <select name="select" id=""><br>
        <option value="plus" >+</option>
        <option value="minus">-</option>
        <option value="multiplication">*</option>
        <option value="division">/</option><br>
       </select><br><br>
       <input type="text" placeholder="enter second number" name="secondnmber"><br><br>
       <button>culculate</button>
     </form>
     <?php
    
    
    switch($_GET['select']){
      case 'plus':
     echo $_GET['firstnmber'] + $_GET['secondnmber'];
     break;

     case 'minus':
     echo $_GET['firstnmber'] - $_GET['secondnmber'];
     break;
     
     case 'multiplication':
      echo $_GET['firstnmber']* $_GET['secondnmber'];
      break;
      case 'plus':
      echo $_GET['firstnmber'] / $_GET['secondnmber'];
      break;
     } 
    
?>
</body>
</html>