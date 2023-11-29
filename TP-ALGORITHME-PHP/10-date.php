<?php

# Créez une fonction qui affiche un message qui return la date du jours
# (d/m/y) Puis affichez le résultat suivi d'un saut de ligne.

$date_du_jour = date("d/m/y \n");

echo $date_du_jour;

/* Ou plus simplement, mais sans créer de fonction : 

echo date("d/m/y");

*/

?>