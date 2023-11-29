<?php

# Écrire une fonction qui prend un nombre en paramètre
# et return "positif" si le nombre est positif, ou bien "négatif" si le nombre
# est negatif ou "nul" si le nombre est null.
# Ensuite, affichez le résultat suivi d'un saut de ligne.

function positif_ou_negatif($nb1){
    if($nb1 > 0)
        return "Positif \n";
    elseif($nb1 < 0)
        return "Négatif \n";
    else
        return "Nul";
}

echo positif_ou_negatif(0);

?>