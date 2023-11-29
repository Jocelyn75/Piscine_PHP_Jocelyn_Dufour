<?php

# Écrire une fonction qui prend une chaîne de caractères en paramètre
# et retourne "longue" si la longueur de la chaîne est supérieure à 10,
# sinon "courte".
# Ensuite, affichez le résultat suivi d'un saut de ligne.

function exo_strlen($string){
    if( strlen($string) > 10)
        return "Longue \n";
    else
        return "Courte \n";
}
echo exo_strlen("Jocelyn");

?>