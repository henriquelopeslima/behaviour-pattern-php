<?php

namespace App\BehaviourPattern;

use App\BehaviourPattern\ActionsWhenGeneratingOrder\{CreateOrderInBank, LogGenerateOrder, SendOrderByEmail};
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

        $ordersRepository = new CreateOrderInBank();
        $logGenerateOrder = new LogGenerateOrder();
        $sendOrderEmail = new SendOrderByEmail();

        $ordersRepository->execAction($order);
        $logGenerateOrder->execAction($order);
        $sendOrderEmail->execAction($order);
    }
}