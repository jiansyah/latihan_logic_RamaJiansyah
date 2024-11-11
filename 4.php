<?php

$kalimat = "saya suka belajar hal baru";

function jumlahKata($kalimat) {
    $panjang = str_word_count($kalimat);
    echo $panjang;
}

jumlahKata($kalimat); //Output : 5

