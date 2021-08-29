<?php

namespace App\BehaviourPattern;

use App\BehaviourPattern\Discounts\DiscountsEmpty;
use App\BehaviourPattern\Discounts\DiscountsMoreFiftyDollars;
use App\BehaviourPattern\Discounts\DiscountsMoreFiveItems;

class DiscountCalculator
{
    public function calculate(Budget $budget): float
    {
        $discountChain = new DiscountsMoreFiveItems(
            new DiscountsMoreFiftyDollars(
                new DiscountsEmpty()
            )
        );

        return $discountChain->calculateDiscount($budget);
    }
}