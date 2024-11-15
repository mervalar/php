<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $usersearch=$_POST["usersearch"];
    
    try{
      require_once "includes/dbh_inc.php";  //C'est pour appel tout le data d'autre file (require,include, include_once) on peut utilise aussi
      
      $query="SELECT* FROM comments WHERE username=:usersearch;";
     
      $stmt=$pdo->prepare($query);

      $stmt->bindparam(":usersearch",$usersearch);

      $stmt->execute();
      $result=$stmt->fetchAll(PDO::FETCH_ASSOC); //for glab all datas  = fetch to grab only on data

      $pdo=null;
      $stmt=null;

      
    
    }catch(PDOexception $e){
        die("Query message:".$e->getMessage());
    
    }
    
    }else{
        header("location:../index.php");
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

<h3>this is our result</h3>
<?php
if(empty($result)){

    echo "<div>";
    echo "<p>there were no results:</p>";
    echo "</div>";

}else{
foreach($result as $row){
    echo htmlspecialchars($row ["username"]);
    echo  htmlspecialchars($row["comments"]); //always we ara going to display sata to a website we have to protect them
}
   //var_dump($result); 

}
?>
</body>
</html>