<?php
$book=[
    ['marhie',12],['mir',18]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>here is books</p>
<ul>
    <?php for($lines=0;$lines<=1;$lines++):?>
    <li><?php echo $book[$lines][0]." ".$book[$lines][1];?></li>

    <?php endfor;?>

</ul>

</body>
</html>