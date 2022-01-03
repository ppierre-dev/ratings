<?php
function check_string($string, $min, $max) {
    if(strlen($string) < $min) return 1;
    if(strlen($string) > $max) return 2;
    return 0;
}

function check_integer($integer, $min=null, $max=null) {
    if(!is_numeric($integer)) return 3;
    if(isset($min) && isset($max)) {
        if($integer < $min) return 4;
        if($integer > $max) return 5;   
    }
    return 0;
}

function check_enum($value, $list){
    if(!array_key_exists($value,$list)) return 6;
    return 0;
}