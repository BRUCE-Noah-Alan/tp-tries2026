<?php
require_once 'tries.php';

$t = [4, 5, 8, 0, 1, 1];
$n   = count($t);

echo "avant de trier : " . implode(", ", $t) . "\n";

echo "Tri à bulles :\n";

echo implode (", ", triBulles($t)) . "\n";

echo "L'algorithme tri à bulles a fait ".
    triBullesCompte($t).
    " comparaisons pour trier un tableau de ".
    count($t) . " éléments.\n";    

echo "Temps d'exécution : " . triBullesChrono($t) . " ms\n"; 


$tailles = [100, 500, 1000, 2000, 5000, 10000];

foreach ($tailles as $n) {
    $tab = range($n, 1); 

    $nbComp = triBullesCompte($tab);
    $temps = triBullesChrono($tab);
    echo "n = $n : $nbComp comparaisons, $temps ms\n";
}
