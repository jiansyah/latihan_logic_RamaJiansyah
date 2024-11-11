<?php

class Volume {

    public static function bola($r) {
        if(is_int($r)) {
            $luas = 4/3 * 22/7 * $r ** 3;
            echo "Volume lingkaran dengan jari-jari $r adalah $luas cm^3 <br>";
        }else {
            echo "Input anda bukan sebuah angka <br>";
        }
    }
}

Volume::bola(7);