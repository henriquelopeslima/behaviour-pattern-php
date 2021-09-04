<?php

require_once 'vendor/autoload.php';

use App\BehaviourPattern\{Budget, Order};

$valueBudget = $argv[1];
$numberItems = $argv[2];
$nameClient = $argv[3];

$generateOrder = new \App\BehaviourPattern\GenerateOrder($valueBudget, $numberItems, $nameClient);
$generateOrder->exec();