<?php
function triInsertion($tab){
    $min=$tab[0];
    $n=count($tab);
    for($i=0;$i<$n-1;$i++) {
        for($j=$i+1;$j!=0;$j--){
            if($tab[$j]<$tab[$j-1]){
                $min=$tab[$j];
                $tab[$j]=$tab[$j-1];
                $tab[$j-1]=$min;
            }
        }
    }
return $tab;
}
$tab=triInsertion([5,3,0,0,1,8,10]);
echo implode(',',$tab);
?>