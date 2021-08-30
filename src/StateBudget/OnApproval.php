<?php

namespace App\BehaviourPattern\StateBudget;

use App\BehaviourPattern\Budget;

class OnApproval extends StateBudget
{
    public function calculateDiscountExtra(Budget $budget): float
    {
        return $budget->value * 0.05;
    }

    public function approve(Budget $budget)
    {
        $budget->stateCurrent = new Approved();
    }

    public function reprove(Budget $budget)
    {
        $budget->stateCurrent = new Reproved();
    }
}