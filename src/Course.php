<?php

namespace Dotr;

use SplDoublyLinkedList;
use SplStack;

class Course
{
    private SplDoublyLinkedList $changes;

    public function __construct(public string $name)
    {
        $this->changes = new SplStack();
    }

    public function addChange(string $change): void
    {
        $this->changes->push($change);
    }

    public function getChanges(): SplDoublyLinkedList
    {
        return $this->changes;
    }
}
