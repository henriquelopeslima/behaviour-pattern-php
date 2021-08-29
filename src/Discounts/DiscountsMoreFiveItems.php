<?php

namespace App\BehaviourPattern\Discounts;

use App\BehaviourPattern\Budget;

class DiscountsMoreFiveItems extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->amountItems > 5) {
            return $budget->value * 0.1;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}