<?php

namespace App\BehaviourPattern\StateBudget;

use App\BehaviourPattern\Budget;

class Approved extends StateBudget
{
    public function calculateDiscountExtra(Budget $budget): float
    {
        return $budget->value * 0.02;
    }

    public function finish(Budget $budget)
    {
        $budget->stateCurrent = new Finished();
    }
}