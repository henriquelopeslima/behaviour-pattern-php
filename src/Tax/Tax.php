<?php

namespace App\BehaviourPattern\Tax;

use App\BehaviourPattern\Budget;

interface Tax
{
    public function calculateTax(Budget $budget): float;
}