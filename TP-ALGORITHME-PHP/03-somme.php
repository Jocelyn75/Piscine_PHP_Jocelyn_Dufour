<?php

# Écrivez une fonction prenant deux paramètres, 'nb1' et 'nb2', 
# représentant des nombres. Cette fonction devrait additionner ces deux nombres 
# et retourner le résultat. 
# Ensuite, affichez le résultat suivi d'un saut de ligne.

function somme($nb1, $nb2){
    $resultAddition = $nb1 + $nb2;
    return $resultAddition;
}
    echo somme(2,3) . "\n";

?>