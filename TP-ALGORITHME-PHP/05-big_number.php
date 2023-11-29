<?php

# Écrire une fonction qui prend deux nombres en paramètre
# et retourne le plus grand des deux.
# Ensuite, affichez le résultat suivi d'un saut de ligne.

function big_number($nb1, $nb2){
    if($nb1 > $nb2)
        return $nb1;
    else
        return $nb2;
}

echo big_number(6, 5);

?>