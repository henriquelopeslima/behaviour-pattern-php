<?php

namespace App\BehaviourPattern;

use App\BehaviourPattern\ActionsWhenGeneratingOrder\ActionsWhenGeneratingOrder;
use DateTimeImmutable;

class GenerateOrderHandler implements Command
{
    /** @var ActionsWhenGeneratingOrder[] */
    private array $actionsBeforeGenerateOrder = [];

    public function addActionBeforeGenerateOrder(ActionsWhenGeneratingOrder $action) {
        $this->actionsBeforeGenerateOrder[] = $action;
    }

    public function exec(GenerateOrder $generateOrder){
        $budget = new Budget();
        $budget->value = $generateOrder->getValueBudget();
        $budget->amountItems = $generateOrder->getNumberItems();

        $order = new Order();
        $order->dateEnding = new DateTimeImmutable();
        $order->nameClient = $generateOrder->getNameClient();
        $order->budget = $budget;

        foreach ($this->actionsBeforeGenerateOrder as $action) {
            $action->execAction($order);
        }
    }
}