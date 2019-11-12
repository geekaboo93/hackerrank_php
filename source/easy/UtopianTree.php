<?php

// Complete the utopianTree function below.
function utopianTree($n) {
    $height = 1;
    if($n > 0) {
        for($i = 0; $i < $n+1; $i++){
            if($i > 0) {
                if($i % 2 != 0){
                    $height*=2;
                } else {
                    $height+=1;
                }
            }
        }
    }

    return $height;
}

$arr = [0,1];
for ($t_itr = 0; $t_itr < count($arr); $t_itr++) {

    print_r(utopianTree($arr[$t_itr]).PHP_EOL);

}
$arr = [4,3];
for ($t_itr = 0; $t_itr < count($arr); $t_itr++) {

    print_r(utopianTree($arr[$t_itr]).PHP_EOL);

}
