<?php
function countingValleys($steps, $path)
{
    // Write your code here
    $step = 0;
    $firstStep = '';
    $counter = 0;
    $valley = 0;
    for ($i = 0; $i < $steps; $i++) {
        if ($step == 0) {
            $firstStep = $path[$i];
            $counter = 0;
        }
        if ($path[$i] == 'U') {
            $step = $step + 1;
            $counter = $counter + 1;
        }
        if ($path[$i] == 'D') {
            $step = $step - 1;
            $counter = $counter + 1;
        }
        if ($step == 0) {
            if ($counter >= 2 && $firstStep == 'D' && $path[$i] == 'U') {
                $valley = $valley + 1;
            }
        }
    }
    return $valley;
}
