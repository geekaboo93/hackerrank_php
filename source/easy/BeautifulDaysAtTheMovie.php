<?php

// Complete the beautifulDays function below.
function beautifulDays($i, $j, $k)
{
    $result = 0;
    for ($x = $i; $x <= $j; $x++) {
        if (!is_float(abs($x - reverse($x)) / $k)) {
            $result += 1;
        }
    }
    return $result;
}

function reverse($n)
{
    $reverse = 0;
    while ($n > 0) {
        $reverse = $reverse * 10;
        $reverse = $reverse + $n % 10;
        $n = (int)($n / 10);
    }
    return $reverse;
}
$result = beautifulDays(20,23,6);
print_r($result.PHP_EOL);