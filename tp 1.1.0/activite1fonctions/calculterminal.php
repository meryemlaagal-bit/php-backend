<?php
declare(strict_types=1);
require_once __DIR__ ."/fonctions.php";
if (count($argv)!==4){
    echo "la commande doit etre au format: php calculatrice.php 12 + 8 ";
    exit;
}
$a=(float)$argv[1];
$b=$argv[2];
$c=(float)$argv[3];
if(!is_numeric($a)||!is_numeric($c)){
    echo"entrer des nombres";
    exit;
}
try{$resultat=match ($b) {
    "+" => additionner($a,$c),
     "-" => soustraire($a,$c),
      "*" => multiplier($a,$c),
       "/" =>diviser($a,$c) ,
       default => null
};}
catch (InvalidArgumentException $e){
    echo $e->getMessage();
    exit;
}
;
if ($resultat=== null){
   echo"l'operateur est inconnu utiliser *,-,+,/";
   exit;
}
echo "resultat:".$resultat;
?>