<?php
$name = 'mourad';
$prenom = 'chams';
$note1 = 15;
$note2 = 18;
$note3 = ($note1 + $note2)/2;
echo 'bonjour '.$name.' '.$prenom.' vous avez eu '.$note3.'de moyenne';



$tab = [
    'nom' => 'mourad',
    'prenom' => 'chams',
    'date' => '1er avril 2000',
    'note' => [15,14,18],
    15
];

print_r($tab);




$mia = readline('entrez votre chose à entrer :');

$nom = readline('entrez votre nom :');
if ($nom === 'mourad'){
    echo 'vous êtes un garçon sympa';
}elseif($nom === 'kenny'){
    echo 'vous êtes un enfoiré de première classe';
}elseif($nom === 'yarianne'){
    echo 'halako zaooo';
}elseif($nom === 'mario'){
    echo 'iha kwh zaiko tsy hanambaly bella zao';
}else{
    echo 'vous n\'êtes pas de la famille';
}


?>
<?php

$nombre1 = null;
$nombre2 = null;
while(($nombre1 <= 0) &&($nombre2 <= 0)){
    $nombre1 = (int)readline('entrez un nombre positif :');
    $nombre2 = (int)readline('entrez le 2eme nombre positif :');
}
$continue = null;
while(($continue !=='o') && ($continue !=='n')){
    $continue = readline('pour continuer veuiller appuyer sur la touche [o]/[n] :');
}
if ($continue === 'o'){
    echo 'pour additionner appuer sur + :';
    echo '\n pour multiplier appuer sur * :';
    echo '\n pour soustraire appuer sur - :';
    echo '\npour diviser  appuer sur / :';
    $signe = readline('entrez votre signe :');
    if ($signe === '+'){
        echo  'la somme de '.$nombre1.' + '.$nombre2.' = '.(($nombre1 + $nombre2));
    }elseif ($signe === '-'){
        echo  'la soustraction de '.$nombre1.' - '.$nombre2.' = '.(($nombre1 - $nombre2));

    }elseif ($signe === '/'){
        echo  'la division de '.$nombre1.' / '.$nombre2.' = '.(($nombre1 / $nombre2));
    }elseif ($signe === '-'){
        echo  'la multiplication de '.$nombre1.' x '.$nombre2.' = '.(($nombre1 * $nombre2)); 
    }   
}elseif($continue === 'n'){
    echo 'comme vous ne voulez pas calculer...... bon bah à tout à l n\'heure';
}else{
    echo 'vous avez fait une erreur :';
}

?>