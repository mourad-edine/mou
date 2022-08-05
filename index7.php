<?php

function somme ($a,$b){
    if ($a > 7){
        return 'a est superieur';
    }elseif ($a === $b){
        return 'ils sont égaux';
    }else{
        return 'b est superieur';
    }
}

$comparaison = somme(1,12);
echo $comparaison."\n";


function bonjour($nom){
    echo 'bonjour '.$nom;
}

bonjour('jean  ');
bonjour('marc');