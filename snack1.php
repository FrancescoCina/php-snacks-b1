<!-- 
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina.
 -->




<?php 
$fifteen_numbers = [];
    do {
        $random_number = rand(1,100);
        $fifteen_numbers[] = $random_number;
    } while(count($fifteen_numbers)<=15  && in_array($random_number,$fifteen_numbers));
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <ul>
    <?php foreach($fifteen_numbers as $number){ ?>
        <li><?=  $number ?></li>
        <?php } ?>
    </ul>
</body>
</html>


