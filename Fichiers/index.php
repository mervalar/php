<?php
$fichier['screenshot']=$_POST['screenshot'];
if(isset($fichier['screenshot']) && $fichier['screenshot']['error']===0){

if($fichier['screenshot']['size']>1000000){
    echo 'envoye un image n ai pas pu effecturé erreur au image il trop volumise';
}
    $fileInfo = pathinfo($_FILES['screenshot']['name']);
    $extension = $fileInfo['extension'];
    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
    if (!in_array($extension, $allowedExtensions)) {
        echo "L'envoi n'a pas pu être effectué, l'extension {$extension} n'est pas autorisée";
        return;
    }}

     // Testons, si le dossier uploads est manquant
      //  $path = __DIR__ . '/uploads/';
      //  if (!is_dir($path)) {
        //    echo "L'envoi n'a pas pu être effectué, le dossier uploads est manquant";
        //    return;
       // }
     // On peut valider le fichier et le stocker définitivement
     move_uploaded_file($_FILES['screenshot']['tmp_name'], $path . basename($_FILES['screenshot']['name']));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>sign-up form</p>
    <form action="" method="post">
        <label for="name">fullname</label>
        <input type="text" name="name"><br>
        <label for="screenshot">screenshot</label>

        <input type="file" name="screenshot"><br><!-- pour insers les fichier -->
        <label for="name">password</label>
        <input type="text" name="pswd"><br>
        <button>sign up</button>
    </form>
   
</body>
</html>