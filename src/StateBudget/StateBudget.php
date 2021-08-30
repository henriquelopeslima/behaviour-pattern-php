<?php

namespace App\BehaviourPattern\StateBudget;

use App\BehaviourPattern\Budget;
use DomainException;

abstract class StateBudget
{
    /**
     * @throws DomainException
     */
    abstract public function calculateDiscountExtra(Budget $budget): float;

    public function approve(Budget $budget)
    {
        throw new DomainException('This budget cannot to be approved');
    }

    public function reprove(Budget $budget)
    {
        throw new DomainException('This budget cannot to be reproved');
    }

    public function finish(Budget $budget)
    {
        throw new DomainException('This budget cannot to be finished');
    }
}