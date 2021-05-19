<?php

namespace Dotr;

use SplDoublyLinkedList;
use SplObjectStorage;
use SplQueue;
use SplStack;

class Course
{
    private SplStack $changes;
    private SplQueue $waitingStudentQueue;
    private SplObjectStorage $enrolledStudents;

    public function __construct(public string $name)
    {
        $this->changes = new SplStack();
        $this->waitingStudentQueue = new SplQueue();
        $this->enrolledStudents = new SplObjectStorage();
    }

    public function addChange(string $change): void
    {
        $this->changes->push($change);
    }

    public function getChanges(): SplStack
    {
        return clone $this->changes;
    }

    public function addStudentToWait(Student $student): void
    {
        $this->waitingStudentQueue->enqueue($student);
    }

    public function getWaitingStudents(): SplQueue
    {
        return clone $this->waitingStudentQueue;
    }

    public function enrollStudent(Student $student): void
    {
        $this->enrolledStudents->attach($student);
    }

    public function getEnrolledStudents(): SplObjectStorage
    {
        return clone $this->enrolledStudents;
    }
}
