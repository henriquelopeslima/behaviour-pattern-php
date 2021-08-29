<?php

namespace App\BehaviourPattern\Discounts;

use App\BehaviourPattern\Budget;

class DiscountsMoreFiftyDollars extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->value > 50) {
            return $budget->value * 0.05;
        }

        return $this->nextDiscount->calculateDiscount();
    }
}