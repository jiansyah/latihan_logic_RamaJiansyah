<?php
function cariBesar($array) {
    echo (max($array));
}

$arr = [1,7, 3, 9, 2, 4, 20, 5];
cariBesar($arr);