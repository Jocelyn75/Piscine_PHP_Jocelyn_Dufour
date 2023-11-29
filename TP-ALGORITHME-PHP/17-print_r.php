<?php

# Créez une fonction nommée 'r' qui prend un paramètre. 
# Cette fonction devrait être réutilisable afin d'abréger l'utilisation 
# de 'print_r()'.

function r($printR){
    return print_r($printR);
}

$tab = [1,2,3,4,5];
r($tab);

?>