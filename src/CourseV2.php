<?php

namespace Dotr;

use Ds\{Stack, Queue, Set};

class CourseV2
{
    private Stack $changes;
    private Queue $waitingStudentQueue;
    private Set $enrolledStudents;

    public function __construct(public string $name)
    {
        $this->changes = new Stack();
        $this->waitingStudentQueue = new Queue();
        $this->enrolledStudents = new Set();
    }

    public function addChange(string $change): void
    {
        $this->changes->push($change);
    }

    public function undoChange(): void
    {
        $this->changes->pop();
    }

    public function getChanges(): Stack
    {
        return $this->changes->copy();
    }

    public function addStudentToWait(Student $student): void
    {
        $this->waitingStudentQueue->push($student);
    }

    public function getWaitingStudents(): Queue
    {
        return $this->waitingStudentQueue->copy();
    }

    public function enrollStudent(Student $student): void
    {
        $this->enrolledStudents->add($student);
    }

    public function getEnrolledStudents(): Set
    {
        return $this->enrolledStudents->copy();
    }
}
