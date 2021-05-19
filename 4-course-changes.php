<?php

// SplDoublyLinkedList -> SplStack

use Dotr\Course;

require_once 'vendor/autoload.php';

$course = new Course('PHP Collections');
$course->addChange('Change 1');
$course->addChange('Change 2');
$course->addChange('Change 3');


foreach ($course->getChanges() as $change) {
    echo $change . PHP_EOL;
}


// SplQueue

$course->addStudentToWait('Bob Dylan 1');
$course->addStudentToWait('John Doe 2');
$course->addStudentToWait('Elvis Presley 3');


foreach ($course->getWaitingStudents() as $student) {
    echo $student . PHP_EOL;
}

echo '-------------------' . PHP_EOL;

$course->enrollStudent('Bob Dylan 1');
$course->enrollStudent('John Doe 2');
$course->enrollStudent('Bob Dylan 1');

foreach ($course->getEnrolledStudents() as $student) {
    echo $student . PHP_EOL;
}
