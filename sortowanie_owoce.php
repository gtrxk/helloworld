<?php
$owoce = array("d"=>"Mango", "a"=>"Papaja","b"=>"Banan","c"=>"Aronia");
//asort($owoce); sortuje alfabetycznie
//ksort($owoce); sortuje po kluczu
sort($owoce);
while(list($klucz, $wartosc)= each ($owoce)){
    echo "$klucz = $wartosc".'<br>';
}


?>