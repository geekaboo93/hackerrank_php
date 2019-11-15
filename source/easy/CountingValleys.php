<?php

// Complete the countingValleys function below.
function countingValleys($n, $s) {
    $count = 0;
    $sum = 0;
    for($i = 0; $i < $n; $i++) {
        if($s[$i] == 'U') {
            if(++$sum == 0) {
                $count++;
            }
        } else {
            $sum--;
        }
    }
    return $count;
}

print_r(countingValleys(8,['U','D','D','D','U','D','U','U']).PHP_EOL);
print_r(countingValleys(12,['D','D','U','U','D','D','U','D','U','U','U','D']).PHP_EOL);