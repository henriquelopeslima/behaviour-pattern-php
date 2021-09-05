<?php

namespace App\BehaviourPattern;

use App\BehaviourPattern\ActionsWhenGeneratingOrder\ActionsWhenGeneratingOrder;
use DateTimeImmutable;
use SplObserver;
use SplSubject;

class GenerateOrderHandler implements SplSubject
{
    /** @var SplObserver[] */
    private array $actionsBeforeGenerateOrder = [];
    public Order $order;

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

        $this->order = $order;
        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        $this->actionsBeforeGenerateOrder[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
    }

    public function notify()
    {
        // TODO: Implement notify() method.
        foreach ($this->actionsBeforeGenerateOrder as $action) {
            $action->update($this);
        }
    }
}