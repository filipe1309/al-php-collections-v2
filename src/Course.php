<?php

namespace Dotr;

use SplDoublyLinkedList;
use SplQueue;
use SplStack;

class Course
{
    private SplStack $changes;
    private SplQueue $waitingStudentQueue;
    private SplDoublyLinkedList $enrolledStudents;

    public function __construct(public string $name)
    {
        $this->changes = new SplStack();
        $this->waitingStudentQueue = new SplQueue();
        $this->enrolledStudents = new SplDoublyLinkedList();
    }

    public function addChange(string $change): void
    {
        $this->changes->push($change);
    }

    public function getChanges(): SplStack
    {
        return clone $this->changes;
    }

    public function addStudentToWait(string $student): void
    {
        $this->waitingStudentQueue->enqueue($student);
    }

    public function getWaitingStudents(): SplQueue
    {
        return clone $this->waitingStudentQueue;
    }

    public function enrollStudent(string $student): void
    {
        $this->enrolledStudents->push($student);
    }

    public function getEnrolledStudents(): SplDoublyLinkedList
    {
        return clone $this->enrolledStudents;
    }
}
