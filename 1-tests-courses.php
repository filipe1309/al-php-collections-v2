<?php

$courses = [
    'Course 1',
    'Course 2',
    'Course 3',
];

$courses2 = [
    'Course 4',
    'Course 5',
];

$newArray = array_merge($courses, $courses2);

array_unshift($newArray, 'Course 0');

var_dump($newArray);
