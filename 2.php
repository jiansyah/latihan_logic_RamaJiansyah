<?php

function formatHuruf($input, $format) {
    if ($format == "Biasa" || $format == "biasa") {
        $lower = strtolower($input);
        $output = "Format Biasa : $lower";
        echo $output;
    } else if ($format == "Judul" || $format == "judul") {
        $judul = ucwords(strtolower($input));
        $output = "Format Judul : $judul";
        echo $output;
    } else {
        echo "Salah input format lek";
    }
}

$kalimat = "HAlo sElamAt PaGi dUniA";

formatHuruf($kalimat, "judul");
echo "<br>";
formatHuruf($kalimat, "biasa");

/*Output :
Format Judul : Halo Selamat Pagi Dunia
Format Biasa : halo selamat pagi dunia
*/
