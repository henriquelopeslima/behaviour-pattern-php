<?php

namespace App\BehaviourPattern\Tax;

use App\BehaviourPattern\Budget;

class Itcmd extends TaxWithTowAliquots
{
    public function calculateTax(Budget $budget): float
    {
        if ($this->shouldApplyMaxRate($budget)) {
            return $this->calculateRateMax($budget);
        }

        return $this->calculateRateMin($budget);
    }

    protected function shouldApplyMaxRate(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->amountItems > 3;
    }

    protected function calculateRateMax(Budget $budget): float
    {
        return $budget->value * 0.04;
    }

    protected function calculateRateMin(Budget $budget): float
    {
        return $budget->value * 0.025;
    }
}