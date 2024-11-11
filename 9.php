<?php

$data = [15,20,25,30,35,40,45,50,55,60];

class Statistika {
    public static function mean($data){
        $result = 0;
        foreach ($data as $num) {
            $result += $num;
        }
        $jumlah = count($data);
        $mean = $result /$jumlah;
        echo $mean;
    }
    
    public static function modus($data) {
        $frekuensi = array_count_values($data);
        $max = max(array_values($frekuensi));
        if ($max > 1) {
            echo (array_search($max, $frekuensi));
        } else {
            echo "Data yang anda masukan tidak memiliki modus";
        }
    }

    public static function median($data) {
        $jumlah = count($data);
        $median = ($data[$jumlah/2] + $data[$jumlah/2-1])/2;
        echo $median;
    }
}

Statistika::modus($data);
echo "<br>";
Statistika::median($data);
echo "<br>";
Statistika::mean($data);
