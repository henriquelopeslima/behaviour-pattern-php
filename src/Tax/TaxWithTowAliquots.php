<?php

namespace App\BehaviourPattern\Tax;

use App\BehaviourPattern\Budget;

abstract class TaxWithTowAliquots implements Tax
{
    abstract protected function shouldApplyMaxRate(Budget $budget): bool;
    abstract protected function calculateRateMax(Budget $budget): float;
    abstract protected function calculateRateMin(Budget $budget): float;
}