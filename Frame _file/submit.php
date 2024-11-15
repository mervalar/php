<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$to="merveillebeaute@gmail.com";
$from=$_POST["email"];
$subject="you have new subuscription";
$subject2="you have just subscribe";
$message="thank you for your subscription ";
$message2="you got a new subscription from".$from;

$header="to".$to;
$header2="from".$from;

mail($to,$subject,$message,$header);
mail($from,$subject2,$message2,$header2);
echo"subscription successful";
}
//testons si le fichier est été bien envoye et si il y a pas des erreur
if(isset($_FILES['screenshot']) && $_FILES['screenshot']['error']===0){

//testons si le fichier n'est pas volumineux
    if($_FILES['screenshot']['size']>1000000){
        echo "l'envoyer n'a pas être effectué ,erreur ou image est tres volumunise";
        return;
    }
}
//testons si l'extensoions est autorise
$fileinfo=pathinfo($_FILES['screenshot']['name']);
$fileextension=$fileinfo['extension'];
$extensionsallowed=['png','jpg','gif'];
if(!in_array($fileextension,$extensionsallowed)){
    echo "l'invoi n'a pas être effectué, l'extansion {$fileextension} n'est pas autoriseé";
    return;
}

//valide le fichier et le stocke définitivement
 $path = __DIR__ . '../uploads/';
move_uploaded_file($_FILES['screenshot']['tmp_name'],$path. basename($_FILES['screenshot']['name']));
//newsletter


?>
