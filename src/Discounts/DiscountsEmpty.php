<?php

namespace App\BehaviourPattern\Discounts;

use App\BehaviourPattern\Budget;

class DiscountsEmpty extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculateDiscount(Budget $budget): float
    {
        return 0;
    }
}