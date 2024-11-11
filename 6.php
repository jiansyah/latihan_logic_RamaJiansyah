<?php
function palingBanyak($kalimat) {
    $arr = str_split($kalimat);
    $frekuensi = array_count_values($arr);

    $max = max(array_values($frekuensi));
    echo (array_search($max, $frekuensi));
}

palingBanyak("aqua");
