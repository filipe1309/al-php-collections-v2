<?php

use Ds\Vector;

// Vector

$totalItems = 32769;
$array = new Vector();
$array->allocate($totalItems);

for ($i = 0; $i < $totalItems; $i++) {
    $array->push($i);
}

$memoryInMB = number_format(memory_get_usage() / 1024 / 1024, 2) . ' MB';
var_dump($totalItems . ' (Vector): ' . $memoryInMB);
