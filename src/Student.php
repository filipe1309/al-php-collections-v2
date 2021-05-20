<?php

namespace Dotr;

use Ds\Hashable;

class Student implements Hashable
{
    public function __construct(public string $name)
    {
    }

    public function equals($student): bool
    {
        if (!$student instanceof Student) {
            return false;
        }

        return $student->name === $this->name;
    }

    public function hash()
    {
        return $this->name;
    }
}
