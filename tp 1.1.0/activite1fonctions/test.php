<?php
//etape 1
declare(strict_types=1);                                                                                                                                                                                                                             
require_once __DIR__ ."/fonctions.php";
echo "4+6=".additionner(4,6)."<br>";
echo "4-6=".soustraire(4,6)."<br>";
echo "4*6=".multiplier(4,6)."<br>";
try {
   echo "4/0=".diviser(4,0)."<br>";
} catch (InvalidArgumentException $e) {
   echo $e->getMessage().PHP_EOL;;
}
//etape2
echo "7 est pair?".(estpair(7)?"oui":"non").PHP_EOL;
echo "5!=".factorielle(5).PHP_EOL;
echo $v=moyenne(2,6,9);
echo $montant=calculfacture(100,10,10,20);
echo $mmm= number_format($montant, 2, ",", " ") . " MAD" ."<br>";
?>