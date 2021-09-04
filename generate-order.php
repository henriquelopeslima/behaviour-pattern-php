<?php

require_once 'vendor/autoload.php';

use App\BehaviourPattern\{Budget, Order};

$valueBudget = $argv[1];
$numberItems = $argv[2];
$nameClient = $argv[3];

$budget = new Budget();
$budget->value = $valueBudget;
$budget->amountItems = $numberItems;

$order = new Order();
$order->dateEnding = new DateTimeImmutable();
$order->nameClient = $nameClient;
$order->budget = $budget;

echo "Created order".PHP_EOL;