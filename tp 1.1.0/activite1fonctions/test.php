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
   echo $e->getMessage();
}
//etape2

?>