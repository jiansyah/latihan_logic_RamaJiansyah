<?php

function ketupat($count){
    for ($i= 0; $i < $count; $i++){
        echo str_repeat(".", $count-$i).str_repeat("+", $i+1) . str_repeat(".", $count-$i). "<br>";
    }    

    for ($i= 0; $i < $count; $i++){
        echo str_repeat(".", $i+2).str_repeat("+", $count-$i-1). str_repeat(".", $i+2) . "<br>";
    }
}

ketupat(5);

//Pakai . karna kalau pake spasi dalam string, output di browser jadi tidak bentuk ketupat