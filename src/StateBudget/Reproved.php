<?php

namespace App\BehaviourPattern\StateBudget;

use App\BehaviourPattern\Budget;

class Reproved extends StateBudget
{
    public function calculateDiscountExtra(Budget $budget): float
    {
        throw new \DomainException('Reproved budgets cannot receive a discount');
    }

    public function finish(Budget $budget)
    {
        $budget->stateCurrent = new Finished();
    }
}