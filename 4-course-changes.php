<?php

// SplDoublyLinkedList -> SplStack

use Dotr\Course;
use Dotr\Student;

require_once 'vendor/autoload.php';

$course = new Course('PHP Collections');
$course->addChange('Change 1');
$course->addChange('Change 2');
$course->addChange('Change 3');


foreach ($course->getChanges() as $change) {
    echo $change . PHP_EOL;
}


$student1 = new Student('Bob Dylan 1');

// SplQueue
$course->addStudentToWait($student1);
$course->addStudentToWait(new Student('John Doe 2'));
$course->addStudentToWait(new Student('Elvis Presley 3'));


foreach ($course->getWaitingStudents() as $student) {
    echo $student->name . PHP_EOL;
}

echo '-------------------' . PHP_EOL;

$course->enrollStudent($student1);
$course->enrollStudent(new Student('John Doe 2'));
$course->enrollStudent($student1);

foreach ($course->getEnrolledStudents() as $student) {
    echo $student->name . PHP_EOL;
}

$isStuent1Enrolled = $course->getEnrolledStudents()->contains($student1);

var_dump($isStuent1Enrolled);
