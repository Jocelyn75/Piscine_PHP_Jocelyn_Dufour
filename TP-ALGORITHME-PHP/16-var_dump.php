<?php

# Créez une fonction nommée 'v' qui prend un paramètre. 
# Cette fonction devrait être réutilisable afin d'abréger l'utilisation 
# de 'var_dump()'.


function v($varDump){
    return var_dump($varDump);
}

$tab = [1,2,3,4,5];
v($tab);



?>