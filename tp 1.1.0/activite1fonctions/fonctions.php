<?php
//exercice1
//etape 1
declare(strict_types=1);
function additionner(float $a,float $b):float{
    return $a+ $b;

}
function soustraire(float $a,float $b):float{
    return $a- $b;

}
function multiplier(float $a,float $b):float{
    return $a* $b;

}
function diviser(float $a,float $b):float{
    if ($b==0){
        throw new InvalidArgumentException("division par zero impossible");
    }else {
    return $a/$b;}

}
 //etape 2
 function estpair(int $n):bool{
    if ($n%2==0){
     return true;
    }else{
     return false;
    }
 }
 function estpositif(float $n):bool{
  if ($n>0){
     return true;
    }else{
     return false;
    } }
 function m(float $a, float $b):float{
   return ($a>$b?$a:$b);
   }
 function maximum(float $a, float $b,float $c ):float{
  $max=m($a,$b);
  return ($max>$c)?$max:$c;
 }

 function maximumavecmax(float $a, float $b,float $c ):float{
  return max($a,$b,$c);
 }
 function estPremier(float $a): bool {
    if($a<2){
        return false;
    }
    for ($i=2; $i <=floor(sqrt($a)) ; $i++) { 
        if ($a%$i ==0) {
            return false;
        }
        
    }
    return true;
}
//etape3
 function calculttc(float $ht, float $tva = 20.0): float {
   return $ht+($ht/100)*$tva;
}
 function calculremise(float $prix, float $pourcentage): float  {
   return round($prix-($prix/100)*$pourcentage,2);
}
 function calculfacture(float $prixUnitaire, int $quantite,
  float $remise = 0, float $tva = 20.0): float   {
   return calculttc(calculremise($prixUnitaire*$quantite,$remise),$tva ) ;
}
echo $montant=calculfacture(100,10,10,20);
echo $mmm= number_format($montant, 2, ",", " ") . " MAD" ."<br>";
//etape 4
 function moyenne(float ...$notes): float   {
    if (count($notes)==0){
        return 0;
    }
    $somme=array_sum($notes);
    return $somme/count($notes);
    
   
}
echo $v=moyenne(2,6,9);
function aireCercle(float $rayon): float{
    return round($rayon*$rayon*M_PI,2);
}
function perimetrecercle(float $rayon): float{
    return round(2*$rayon*M_PI,2);
}
function celsiusVersFahrenheit(float $c): float{
    return   $c*9/5+ 32;
}
function fahrenheitVerscelsius (float $f): float{
    return   ($f-32)*5/9;
}
function convertirDevise(float $montant, float $taux): float{
    return $montant*$taux ;
}
//etape5
function factorielle(int $n): int{
    if($n>0){
        $s=1;
        for ($i=1; $i<=$n ; $i++) { 
           $s=$s*$i;
          
        }
        return $s; }
    else {
        throw new InvalidArgumentException("le nombre est inferieur a zero");
    } ;
}
function fibonacci(int $n): array{
    if ($n<=0) return [];
    if ($n==1) return [0];
    $s=[0,1];
    for ($i=2; $i < $n; $i++) { 
        array_push($s,$s[$i-1]+$s[$i-2]);
    }
   return $s
}
function pgcd(int $a, int $b): int {
    while ($b != 0) {
        $reste = $a % $b;
        $a = $b;
        $b = $reste;
    }
    return $a;
}
function puissance(int $a, int $b): int {
    if ($b == 0) return 1;

    $s = 1;
    for ($i = 1; $i <= $b; $i++) {
        $s = $s * $a;
    }
    return $s;
}


 ?>