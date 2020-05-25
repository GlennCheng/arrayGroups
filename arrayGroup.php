<?php


$numbers = [];
$walkGroup = [];
$walkHistory = [];
$arrayGroups = [];

global $numbers, $walkGroup, $walkHistory, $arrayGroups;

$length = $argv[1];
echo 'Array Length: ' . $length . PHP_EOL;




$numbers = range (1,$length);
shuffle ($numbers);


$j = 1;
while ($j <= $length) {
    echo 'position:'.$j.", value:".$GLOBALS['numbers'][$j-1] . PHP_EOL;
    $j++;
}

//var_dump($numbers);


$i = 0;
while($i < $length-2) {

    if (in_array($GLOBALS['numbers'][$i], $GLOBALS['walkHistory'])) {
        $i++;
        continue;
    }
    array_push($GLOBALS['walkGroup'], $GLOBALS['numbers'][$i]);
    array_push($GLOBALS['walkHistory'], $GLOBALS['numbers'][$i]);

    walk($GLOBALS['numbers'][$i]);

    $i++;
}

var_dump($arrayGroups);





function walk($key) {
    $key = $key-1;
    $nextPosition = $GLOBALS['numbers'][$key];

    array_push($GLOBALS['walkHistory'], $GLOBALS['numbers'][$key]);

    if (in_array($GLOBALS['numbers'][$key], $GLOBALS['walkGroup'])) {
        $GLOBALS['arrayGroups'][] = $GLOBALS['walkGroup'];
        $GLOBALS['walkGroup'] = [];
    } else {
        array_push($GLOBALS['walkGroup'], $GLOBALS['numbers'][$key]);

        walk($nextPosition);
    }
}

