




<?php
$a = 5 ;
$b = 4 ;
$obdelnikobsah = $a * $b ;
echo '<p>Obsah obdelníku o stranách ' . $a . 'cm,' . $b . 'cm ' . 'je ' . $obdelnikobsah . 'cm².</p>' ;

$strana = 6 ;
$uhel = 60 ;
$vyska = $strana * sin(deg2rad($uhel))  ;
$trojuhelnikobsah = round($strana * $vyska / 2) ;
echo  '<p>Rovnostranný trojúhelník o straně délky ' . $strana . ' cm '. 'a uhlu ' . $uhel . '° je ' . $trojuhelnikobsah . 'cm².</p>' ;
?>