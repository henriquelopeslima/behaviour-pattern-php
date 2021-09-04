<?php

require_once 'vendor/autoload.php';

use App\BehaviourPattern\{Budget, Order};
use App\BehaviourPattern\ActionsWhenGeneratingOrder\{CreateOrderInBank, LogGenerateOrder, SendOrderByEmail};

$valueBudget = $argv[1];
$numberItems = $argv[2];
$nameClient = $argv[3];

$generateOrder = new \App\BehaviourPattern\GenerateOrder($valueBudget, $numberItems, $nameClient);
$generateOrderHandler = new \App\BehaviourPattern\GenerateOrderHandler();
$generateOrderHandler->addActionBeforeGenerateOrder(new CreateOrderInBank());
$generateOrderHandler->addActionBeforeGenerateOrder(new LogGenerateOrder());
$generateOrderHandler->addActionBeforeGenerateOrder(new SendOrderByEmail());
$generateOrderHandler->exec($generateOrder);