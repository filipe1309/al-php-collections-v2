<?php

// PHP has a 2^n based Memory Allocation
// Ex
// Arr[] = 1 // Alloc 2^0 = 1
// Arr[] = 2 // Alloc 2^1 = 2
// Arr[] = 3 // Alloc 2^2 = 4
// Arr[] = 4
// Arr[] = 5 // Alloc 2^3 = 8
// Arr[] = 6
// Arr[] = 7
// Arr[] = 8
// Arr[] = 9 // Alloc 2^4 = 16
// ...

// Ex 2^15 = 32768
$array = [];

$totalItems = 32768;
for ($i = 0; $i < $totalItems; $i++) {
    $array[$i] = $i;
}

$memoryInMB = number_format(memory_get_usage() / 1024 / 1024, 2) . ' MB';
var_dump($totalItems . ': ' . $memoryInMB);


// Ex 2^15 = 32768 + 1 = 2^16 = 65536 bytes

$array = [];
$totalItems = 32769;

for ($i = 0; $i < $totalItems; $i++) {
    $array[$i] = $i;
}

$memoryInMB = number_format(memory_get_usage() / 1024 / 1024, 2) . ' MB';
var_dump($totalItems . ': ' . $memoryInMB);
