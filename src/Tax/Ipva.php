<?php

namespace App\BehaviourPattern\Tax;

use App\BehaviourPattern\Budget;

class Ipva extends TaxWithTowAliquots
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
        return $budget->value > 500;
    }

    protected function calculateRateMax(Budget $budget): float
    {
        return $budget->value * 0.03;
    }

    protected function calculateRateMin(Budget $budget): float
    {
        return $budget->value * 0.02;
    }
}