<?php
$k = 0;
$élève = [
    [
        'nom' => '',
        'prenom' => '',
        'note' => [],
        'classe' => ''
    ]
];
$not = null;
$nombre = (int)readline('entrez le nombre d\'elève :');
$note = (int)readline('entrez le nombre de sa/ses notes :');

for ($i = 0; $i < $nombre; $i++){
    $élève[$i]['nom'] = readline('entrez le nom de l\'élève : ');
    $élève[$i]['prenom'] = readline('entrez le prenom de l\'élève : ');
    $élève[$i]['classe'] = readline('entrez la classe de l\'élève : ');
    for ($j = 0; $j < $note; $j++){
        $not = (int)readline('entrez la note :'.$j.' :');
        $élève[$i]['note'][] = $not;
    }

}

print_r($élève);
var_dump($élève);


?>


