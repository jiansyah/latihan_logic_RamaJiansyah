<?php
$count = 5;

for ($i= 0; $i < $count; $i++){
    echo str_repeat(".", $count-$i).str_repeat("+", $i+1) . str_repeat(".", $count-$i). "<br>";
}    

for ($i= 0; $i < $count; $i++){
    echo str_repeat(".", $i+1).str_repeat("+", $count-$i). str_repeat(".", $i+1) . "<br>";
}