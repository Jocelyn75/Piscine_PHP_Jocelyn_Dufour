<?php

# Écrivez une fonction qui prend en paramètre une chaîne 
# de caractères et retourne cette chaîne inversée. 
# Utilisez la fonction avec une chaîne de texte de votre choix. 
# Ensuite, affichez le résultat suivi d'un saut de ligne.

function inverser_chaine($string){
    return strrev($string); 
}
echo inverser_chaine("Jocelyn") . "\n";
?>