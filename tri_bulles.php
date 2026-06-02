<?php
$cmpt=0;
function triBulles($tab){
    $c=0;
    $n=count($tab);
    $i=0;
    $j=0;
    global $cmpt;
    

    while($i < $n){ // on fait n-1 passage car à la fin le dernier est automatiquement trié, plus rine avec quoi le comparer
    $cmpt+=1;
        while($j<$n-$i-1){
            if($tab[$j]>$tab[$j+1]){
                $c=$tab[$j];
                $tab[$j]= $tab[$j+1];
                $tab[$j+1]=$c;
                
            }
            $j++;
            
        }
        $j=0;
        $i++;
    }
    return $tab;
}

$tab=[5,1,4,8,3];
$tris=triBulles($tab);
print_r($tris);
echo "  avec $cmpt iterations";

?>