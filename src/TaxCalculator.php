<?php

namespace App\BehaviourPattern;

use App\BehaviourPattern\Tax\Tax;

class TaxCalculator
{
    public function calculate(Budget $budget, Tax $tax): float
    {
        return $tax->calculateTax($budget);
    }
}