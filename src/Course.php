<?php

namespace Dotr;

use SplQueue;
use SplStack;

class Course
{
    private SplStack $changes;
    private SplQueue $waitingStudentQueue;

    public function __construct(public string $name)
    {
        $this->changes = new SplStack();
        $this->waitingStudentQueue = new SplQueue();
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
}
