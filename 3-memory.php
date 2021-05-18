<?php

// SplDoublyLinkedList

$totalItems = 32769;
$array = new SplDoublyLinkedList();

for ($i = 0; $i < $totalItems; $i++) {
    $array->push($i);
}

$memoryInMB = number_format(memory_get_usage() / 1024 / 1024, 2) . ' MB';
var_dump($totalItems . ' (SplDoublyLinkedList): ' . $memoryInMB);
