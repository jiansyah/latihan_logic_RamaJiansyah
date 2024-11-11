<?php

class LuasLingkaran {

    public static function ruji($r) {
        if(is_int($r)) {
            $luas = 3.14 * $r ** 2;
            echo "Luas Lingkaran dengan jari-jari $r adalah $luas cm^2 <br>";
        }else {
            echo "Input anda bukan sebuah angka <br>";
        }
    }

    public static function diameter($d) {
        if(is_int($d)) {
            $luas = 3.14 * (($d/2) ** 2) ;
            echo "Luas Lingkaran dengan diameter $d adalah $luas cm^2 <br>";
        }else {
            echo "Input anda bukan sebuah angka <br>";
        }
    }
}

echo LuasLingkaran::ruji("14"); 
echo LuasLingkaran::diameter(28);

/*Output
Input anda bukan sebuah angka
Luas Lingkaran dengan diameter 28 adalah 615.44 cm
*/


