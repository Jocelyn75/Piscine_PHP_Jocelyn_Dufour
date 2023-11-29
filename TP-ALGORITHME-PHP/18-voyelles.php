<?php

# Créez une fonction qui prend en paramètre une chaîne de caractères.
# Cette fonction devrait compter le nombre de voyelles présentes dans la chaîne 
# (en considérant seulement les voyelles 'a', 'e', 'i', 'o', 'u', 'A', 
# 'E', 'I', 'O', 'U'). 
# Utilisez la fonction compterVoyelles avec une chaîne de texte de votre choix. 
# Affichez le nombre de voyelles dans le terminal.



function compterVoyelles($string){
    $tabVoyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $tabString = str_split($string);
    $stringLength = strlen($string);
    $nbreVoyelles = 0;
    for ($i=0; $i <= $stringLength; $i++){
        if (in_array($tabString[$i], $tabVoyelles)){
            $nbreVoyelles++;
            }
        }
        return $nbreVoyelles;
    }
    echo compterVoyelles("Phrase test pour compter les voyelles");

// J'ai un peu triché, j'étais bloqué avec un résultat qui me renvoyait systématiquement 0. J'ai demandé à ChatGPT, il manquait [$i] dans in_array() à la ligne 18. J'ai compris que ça servait à faire le point de comparaison à chaque tour de boucle, je ne savais pas comment l'écrire. Au final, j'obtiens le bon résultat, mais avec deux warnings. 

?>