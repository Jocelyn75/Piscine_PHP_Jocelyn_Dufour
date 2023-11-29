<?php

# Écrire une fonction qui prend une chaîne de caractères en paramètre
# et retourne "vide" si la chaîne est vide sinon "non vide",
# Ensuite, affichez le résultat suivi d'un saut de ligne.

function chaine_vide($string)
{
    if(empty($string))
        return "vide \n";
    else{
        return "non vide \n";
    }
}
echo chaine_vide("Jocelyn")

?>