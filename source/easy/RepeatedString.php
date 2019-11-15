<?php

function repeatedString($s, $n) {
    $key = 'a';
    if(strlen($s) == 1 ) {
        return $s == $key ?  $n : 0;
    }


    $count = substr_count($s, $key);

    $temp = $n/strlen($s);
    $remainder = $n - strlen($s)*intval($temp);
    $temp_result = intval($temp) * $count;
    if($remainder > 0) {
        $s = substr($s,0,$remainder);
        $count = $temp_result+substr_count($s,$key);
    } else {
        $count = $count*$temp;
    }
    return $count;
}

print_r(repeatedString('aba',10).PHP_EOL);
print_r(repeatedString('a',100000000).PHP_EOL);