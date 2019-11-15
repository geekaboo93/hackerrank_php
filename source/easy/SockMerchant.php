<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {
    $temp = [];
    for($i=0; $i < $n; $i++) {
        if(!isset($temp[$ar[$i]])) {
            $temp[$ar[$i]] = 1;
        } else {
            $temp[$ar[$i]]+=1;
        }
    }
    $result = 0;
    foreach($temp as $val) {
        if($val > 1 ) {
            $result+=floor($val/2);
        }
    }
    return $result;
}

print_r(sockMerchant(9,[10,20,20,10,10,30,50,10,20]).PHP_EOL);
print_r(sockMerchant(10,[1,1,3,1,2,1,3,3,3,3]).PHP_EOL);
