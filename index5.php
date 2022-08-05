<?php
$i = 0;
$liste = [];
$not = null;
$n = (int)readline('entrez le nombre de note :');
while($i < $n){
    $not = readline('entrez une note : ');
    $liste[] = $not;
    $i = $i + 1;      
}
foreach($liste as $list){
    echo  $list."\n" ;
}

echo "voici le valeur des $n notes : \n";

print_r($liste);


?>