<?php

namespace App\BehaviourPattern;

class DiscountCalculator
{
    public function calculate(Budget $budget): float
    {
        if ($budget->amountItems > 5) {
            return $budget->value * 0.1;
        }
        
        return 0;
    }
}