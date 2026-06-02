<?php 

function triBulles($tab){
    $n = count($tab);
    for($i=0; $i<$n-1; $i++){
        for($j=0; $j<$n-1-$i; $j++){
            if($tab[$j]>$tab[$j+1]){
                $temp = $tab[$j];
                $tab[$j] = $tab[$j+1];
                $tab[$j+1] = $temp;
            }
        }
    }
    return $tab;
}

function triBullesCompte($tab){
    $n = count($tab);
    $compteur = 0;
    for($i=0; $i<$n-1; $i++){
        for($j=0; $j<$n-1-$i; $j++){
            $compteur++;
            if($tab[$j]>$tab[$j+1]){
                $temp = $tab[$j];
                $tab[$j] = $tab[$j+1];
                $tab[$j+1] = $temp;
            }
        }
    }
    return $compteur;
}

function triBullesChrono ( $tab ) {
    $debut = microtime ( true );
    triBulles ( $tab );
    $fin = microtime ( true );
    return round (( $fin - $debut ) * 1000 , 2); // en ms
}

function triSelection($tab){
$n=count($tab);
$compt=0;
for($i=0;$i<$n;$i++){
    $min_indice=$i;
    for($j=$i;$j<$n-1;$j++){
        $compt++;
        if($tab[$min_indice]>$tab[$j+1]){
            $min_indice=$j+1;
        }
    }
    
    $compt++;
    if($i!=$min_indice){
        $temp=$tab[$i];
        $tab[$i]=$tab[$min_indice];
        $tab[$min_indice]=$temp;

    }
}
return $tab;
}
function triSelectionCompte($tab){
    $n=count($tab);
    $compt=0;
for($i=0;$i<$n;$i++){
    $min_indice=$i;
    for($j=$i;$j<$n-1;$j++){
        $compt++;
        if($tab[$min_indice]>$tab[$j+1]){
            $min_indice=$j+1;
        }
    }
    
    $compt++;
    if($i!=$min_indice){
        $temp=$tab[$i];
        $tab[$i]=$tab[$min_indice];
        $tab[$min_indice]=$temp;

    }
}

    return $compt;
}

function triSelectionChrono ( $tab ) {
    $debut = microtime ( true );
    triSelection ( $tab );
    $fin = microtime ( true );
    return round (( $fin - $debut ) * 1000 , 2); // en ms
}



function triInsertion( $tab ){
    $n=count($tab);

    for($i=0;$i<$n-1;$i++){
        for($j=$i+1;$j!=0;$j--){
            if($tab[$j]<$tab[$j-1]){
                $temp=$tab[$j-1];
                $tab[$j-1]=$tab[$j];
                $tab[$j]=$temp;
            }
            else{break;}
        }
    }
    return $tab;

}

function triInsertionCompte($tab){
   $n=count($tab);
   $compt=0;

    for($i=0;$i<$n-1;$i++){
        for($j=$i+1;$j!=0;$j--){
            $compt++;
            if($tab[$j]<$tab[$j-1]){
                $temp=$tab[$j-1];
                $tab[$j-1]=$tab[$j];
                $tab[$j]=$temp;
            }
            else{break;}
        }
    }
    return $compt;
}

function triInsertionChrono ( $tab ) {
    $debut = microtime ( true );
    triSelection ( $tab );
    $fin = microtime ( true );
    return round (( $fin - $debut ) * 1000 , 2); // en ms
}

?>