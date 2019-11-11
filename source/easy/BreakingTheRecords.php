<?php
// Complete the breakingRecords function below.
function breakingRecords($scores) {
    $max_record = 0;
    $min_record = 0;
    $curr_max = $scores[0];
    $curr_min = $scores[0];
    for($i=0; $i < count($scores); $i++){

        if($i > 0) {
           if($scores[$i] > $curr_max) {
               $curr_max = $scores[$i];
               $max_record+=1;
           } elseif($scores[$i] < $curr_min) {
               $curr_min = $scores[$i];
               $min_record+=1;
           }
        }
    }
    return [$max_record,$min_record];
}

$result = breakingRecords([10,5,20,20,4,5,2,25,1]);
print_r(implode(",",$result).PHP_EOL);
$result = breakingRecords(3,4,21,36,10,28,35,5,24,42);
print_r(implode(",",$result).PHP_EOL);
