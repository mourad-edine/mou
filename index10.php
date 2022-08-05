<?php

$nombre1 = null;
$nombre2 = null;
while(($nombre1 == 0) &&($nombre2 == 0)){
    $nombre1 = (int)readline('entrez le 1er nombre nombre :');
    $nombre2 = (int)readline('entrez le 2eme nombre :');
}
$continue = null;
while(($continue !=='o') && ($continue !=='n')){
    $continue = readline('pour continuer veuiller appuyer sur la touche [o]/[n] :');
}
if ($continue === 'o'){
    echo '          pour additionner appuer sur + :
          pour multiplier appuer sur * :
          pour soustraire appuer sur - :
          pour diviser  appuer sur / :___________';
    $signe = readline('entrez votre signe :');
    if ($signe === '+'){
        echo  'la somme de '.$nombre1.' + '.$nombre2.' = '.(($nombre1 + $nombre2));
    }elseif ($signe === '-'){
        echo  'la soustraction de '.$nombre1.' - '.$nombre2.' = '.(($nombre1 - $nombre2));

    }elseif ($signe === '/'){
        echo  'la division de '.$nombre1.' / '.$nombre2.' = '.(($nombre1 / $nombre2));
    }elseif ($signe === '*'){
        echo  'la multiplication de '.$nombre1.' x '.$nombre2.' = '.(($nombre1 * $nombre2)); 
    }   
}elseif($continue === 'n'){
    echo 'comme vous ne voulez pas calculer...... bon bah à tout à l n\'heure';
}else{
    echo 'vous avez fait une erreur :';
}

?>