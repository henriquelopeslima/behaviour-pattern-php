<?php

namespace App\BehaviourPattern;

use DateTimeImmutable;

class GenerateOrder implements Command
{
    private float $valueBudget;
    private int $numberItems;
    private string $nameClient;

    public function __construct(float $valueBudget, int $numberItems, string $nameClient)
    {
        $this->valueBudget = $valueBudget;
        $this->numberItems = $numberItems;
        $this->nameClient = $nameClient;
    }

    public function exec(){
        $budget = new Budget();
        $budget->value = $this->valueBudget;
        $budget->amountItems = $this->numberItems;

        $order = new Order();
        $order->dateEnding = new DateTimeImmutable();
        $order->nameClient = $this->nameClient;
        $order->budget = $budget;

        echo "Created order".PHP_EOL;
    }
}