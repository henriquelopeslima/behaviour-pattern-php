<?php

namespace App\BehaviourPattern;

class Budget {
    public int $amountItems;
    public float $value;
    public string $stateCurrent;

    public function applyDiscountExtra()
    {
        $this->value -= $this->calculateDiscountExtra();
    }

    public function calculateDiscountExtra(): float
    {
        if ($this->stateCurrent == 'ON_APPROVAL') {
            return $this->value * 0.05;
        }

        if ($this->stateCurrent == 'APPROVED') {
            return $this->value * 0.02;
        }

        throw  new \DomainException(
            'Approved and finalized budgets cannot receive a discount'
        );
    }
}