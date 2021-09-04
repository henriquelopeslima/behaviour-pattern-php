<?php

namespace App\BehaviourPattern;

use DateTimeImmutable;

class GenerateOrderHandler implements Command
{
    public function exec(GenerateOrder $generateOrder){
        $budget = new Budget();
        $budget->value = $generateOrder->getValueBudget();
        $budget->amountItems = $generateOrder->getNumberItems();

        $order = new Order();
        $order->dateEnding = new DateTimeImmutable();
        $order->nameClient = $generateOrder->getNameClient();
        $order->budget = $budget;

        echo "Created order".PHP_EOL;
    }
}