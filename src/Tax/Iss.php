<?php

namespace App\BehaviourPattern\Tax;

use App\BehaviourPattern\Budget;

class Iss implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->value * 0.06;
    }
}