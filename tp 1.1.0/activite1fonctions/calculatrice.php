<?php
declare(strict_types=1);
require_once __DIR__ ."/fonctions.php";
$resultat=null;
if(isset($_POST['a']) && isset($_POST['op']) && isset($_POST['b']) && isset($_POST['calculer'])){
  $a=$_POST['a'];
$op=$_POST['op'];
$b=$_POST['b'];
if (!is_numeric($a)||!is_numeric($b)) {
  echo "entrer des nombres valides";
}else{
try{
  $resultat=match($op){
   "+"=>additionner((float)$a,(float)$b),
   "-"=>soustraire((float)$a,(float)$b),
   "*"=>multiplier((float)$a,(float)$b),
   "/"=>diviser((float)$a,(float)$b),
   default=>null
  };
  }catch(InvalidArgumentException $e){
   echo $e->getMessage();
  }
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    <input type="number" name="a">
    <select name="op" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="b">
    <input type="submit" value="calculer"name="calculer" >
</form>
    
    
</body>
</html>
<?php

if($resultat!==null){
    echo"resultat:".htmlspecialchars((string)$resultat);
}
 ?>


   