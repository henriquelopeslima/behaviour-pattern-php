<?php

namespace App\BehaviourPattern\StateBudget;

use App\BehaviourPattern\Budget;

class Finished extends StateBudget
{
    public function calculateDiscountExtra(Budget $budget): float
    {
        throw new \DomainException('Finished budgets cannot receive a discount');
    }
}