<?php
function validate_between($check, $min, $max){
    $n = mb_strlen($check);
    return $min <= $n && $n <= $max;
}

function validate_unique($check){
    $flag = User::isExist($check);
    return $flag;
}