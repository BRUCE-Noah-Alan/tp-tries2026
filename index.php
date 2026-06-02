<?php
require_once "tris.php";

$tab = [100 , 500 , 1000 , 2000 , 5000 , 10000];
 $trie = triBulles ( $tab ) ;
 $time=triBullesChrono($tab);
 $compa=triBullesCompte($tab);
 echo "voici le tableau avant:".implode(',',$tab)."<br>";
 echo "le voici apres:".implode (', ', $trie )." avec $compa comparaisons et $time ms <br>" ;
 
 echo"--------------------------------TRI SELECTION<br>";

//  $tailles = [100 , 500 , 1000 , 2000 , 5000 , 10000];

//  foreach ( $tailles as $n ) {
//  $tab = range ( $n , 1) ; // [n, n -1 , ... , 2 , 1] = cas defav
//  $nbComp = triBullesCompt ( $tab ) ;
//  $temps = triBullesChrono ( $tab ) ;
//  echo "n = $n : $nbComp comparaisons , $temps ms <br>";
//  }
$tab = [5 , 3 , 8 , 1 , 4];
$trie = triSelection( $tab ) ;
echo "voici le tableau avant:".implode(',',$tab)."<br>";
echo "le voici apres:".implode (', ', $trie )."<br>" ;
$tab = [100 , 500 , 1000 , 2000 , 5000 , 10000];
 $trie = triSelection ( $tab ) ;
 $time=triSelectionChrono($tab);
 $compa=triSelectionCompte($tab);
 echo "voici le tableau avant:".implode(',',$tab)."<br>";
 echo "le voici apres:".implode (', ', $trie )." avec $compa comparaisons et $time ms <br>" ;
 echo"--------------------------------TRI INSERTION<br>";
$tab = [10000 , 500 , 2000 , 5000 , 1000 , 0];
$trie = triInsertion( $tab ) ;
echo "voici le tableau avant:".implode(',',$tab)."<br>";
echo "le voici apres:".implode (', ', $trie )."<br>" ;
 $tab = [10000 , 500 , 2000 , 5000 , 1000 , 0];
 $trie = triInsertion ( $tab ) ;
 $time=triInsertionChrono($tab);
 $compa=triInsertionCompte($tab);
 echo "voici le tableau avant:".implode(',',$tab)."<br>";
 echo "le voici apres:".implode (', ', $trie )." avec $compa comparaisons et $time ms <br>" ;
?>