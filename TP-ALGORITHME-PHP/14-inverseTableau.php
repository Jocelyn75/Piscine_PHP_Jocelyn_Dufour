<?php

# Écrivez une fonction qui prend en paramètre un tableau de nombres. 
# La fonction doit renvoyer un nouveau tableau contenant les mêmes 
# nombres, mais dans l'ordre inverse. 
# Affichez le tableau original et le tableau inversé dans le terminal

$tab = [1,2,3,4,5];
    foreach($tab as $values){
        echo "$values ";
    }

$tabInverse = array_reverse($tab);
    foreach($tabInverse as $values){
    echo "$values ";
    }

?>