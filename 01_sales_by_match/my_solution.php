<?php

function sockMerchant($n, $ar)
{
    // Write your code here
    $pairs = 0;
    $count = 0;
    $temp = 0;
    for ($i = 0; $i < $n; $i++) {
        $temp = $ar[$i];
        if ($temp == null) {
            continue;
        }
        $count = $count + 1;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($ar[$j] == $temp) {
                $count = $count + 1;
                $ar[$j] = null;
            }
        }
        $pair = intval($count / 2);
        $pairs = $pairs + $pair;
        $count = 0;
    }
    return $pairs;
}
