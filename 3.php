<?php

$str = "aaaabbaccccddddcc";
$s = 24503984;

function hitungChr($str){
    if(is_string($str)){
    foreach (count_chars($str, 1) as $char => $banyak) {
    echo chr($char) . " : $banyak <br>";
    }
    }else{
        echo "Input anda bukan string";
    }
}


hitungChr($str);
/*Output
a : 5
b : 2
c : 6
d : 4
*/

//Kalau bukan string
hitungChr($s);  //Output : Input anda bukan string