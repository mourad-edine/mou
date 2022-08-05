/* chiffre en lettre*/
<?php
$lettre = [
    'zero',
    'un',
    'deux',
    'trois',
    'quatre',
    'cinq',
    'six',
    'sept',
    'huit',
    'neuf',
    'dix',
    'onze',
    'douze',
    'treize',
    'quatorze',
    'quinze',
    'seize',
    'dix-sept',
    'dix-huit',
    'dix-neuf',
    'vingt',
    'vingt-un',
    'vingt-deux',
    'vingt-trois',
    'vingt-quatre',
    'vingt-cinq',
    'vingt-six',
    'vingt-sept',
    'vingt-huit',
    'vingt-neuf',
    'trente',
    'trente-un',
    'trente-deux',
    'trente-trois',
    'trente-quatre',
    'trente-cinq',
    'trente-six',
    'trente-sept',
    'trente-huit',
    'trente-neuf',
    'quarante'
];
$chiffre = readline('entrez un chiffre inférieur à quarante :');

if ($chiffre <= 0){
    echo $chiffre.' = '.$lettre[$chiffre];
}elseif($chiffre == 0){
    echo $chiffre.' = zéro ';
}else{
    echo $chiffre.' = '.$lettre[$chiffre];
}

?>