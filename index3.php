<?php 
$liste = [];
$n = readline('entrez un nombre :');
for($i = 0; $i<$n; $i++){
   $liste[$i] = readline('entrez une valeur juste :');  
}

foreach($liste as $list){
    echo "$list \n";
}
?>
while($chiffre > 40){
    $chiffre = readline('entrez un chiffre inférieur à quarante :');
}