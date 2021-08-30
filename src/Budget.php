<?php

namespace App\BehaviourPattern;

use App\BehaviourPattern\StateBudget\OnApproval;
use App\BehaviourPattern\StateBudget\StateBudget;

class Budget {
    public int $amountItems;
    public float $value;
    public StateBudget $stateCurrent;

    public function __construct()
    {
        $this->stateCurrent = new OnApproval();
    }

    public function applyDiscountExtra()
    {
        $this->value -= $this->stateCurrent->calculateDiscountExtra($this);
    }

    public function approve()
    {
        $this->stateCurrent->approve($this);
    }

    public function reprove()
    {
        $this->stateCurrent->reprove($this);
    }

    public function finish()
    {
        $this->stateCurrent->finish($this);
    }
}