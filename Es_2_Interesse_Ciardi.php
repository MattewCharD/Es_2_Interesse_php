<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interesse</title>
</head>
<body>

<p>Benvenuti nella pagina di calcolo di interesse!</p>

<?php 
$capitale = 7000;
$tasso= 20;
$numGiorni=40;
$ANNO_PERC=36500;
$interesse =  ($capitale * $tasso * $numGiorni) / $ANNO_PERC;
$interesse = number_format($interesse, 2);



echo "<p>Il capitale è di $capitale €</p>";
echo "<p>Il tasso è del $tasso%</p>";
echo "<p>I giorni sono $numGiorni</p>";
echo "<h2 style='color:green;'>L'interesse calcolato è di $interesse €</h2>";


?>


    
</body>
</html>