<?php

// SplDoublyLinkedList -> SplStack

use Dotr\Course;

require_once 'vendor/autoload.php';

$course = new Course('PHP Collections');
$course->addChange('Change 1');
$course->addChange('Change 2');
$course->addChange('Change 3');

// $list = $course->getChanges();
// $list->shift(); // Should not be possible on a Stack!

foreach ($course->getChanges() as $change) {
    echo $change . PHP_EOL;
}
