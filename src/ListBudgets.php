<?php

namespace App\BehaviourPattern;

use IteratorAggregate;

class ListBudgets implements IteratorAggregate
{
    /** @var Budget[] */
    private array $budgets;

    public function __construct()
    {
        $this->budgets = [];
    }

    public function addBudget(Budget $budget)
    {
        $this->budgets[] = $budget;
    }

    public function budgets(): array
    {
        return $this->budgets;
    }

    public function getIterator(): iterable
    {
        return new \ArrayIterator($this->budgets);
    }
}