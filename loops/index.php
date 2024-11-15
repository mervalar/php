<?php

$booleans=true;
$num=5;

//for loop
for($i=0;$i<=$num;$i++){
    echo "count".$i."!";
    echo"<br>";
}

//while loop pour tous il est boolean ou if
while($booleans){
    echo $booleans;
    $booleans=false;
    echo"<br>";
}

//do while loop (quand le statement et faux)
$count=5;
do{
    echo "count".$count."!";
    echo"<br>";
    $count++;
}while($count<$num);


//dans les arrays
$fruits= array("banana","pinaples","apples");
foreach($fruits as $fruit){            //pour les arrays avec enomerete on utilise foreach
echo "Ca c'est ". $fruit;
echo"<br>";
}

$fruits= array("yellow"=>"banana","green"=>"pinaples","red"=>"apples");
foreach($fruits as $fruit=>$color){        //pour les arrays avec les valuers on mets => signe foreach
echo "Ca c'est ". $fruit."est sa color est ".$color;
echo"<br>";

}