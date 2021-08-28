<?php

use App\BehaviourPattern\Budget;
use App\BehaviourPattern\DiscountCalculator;
use App\BehaviourPattern\TaxCalculator;

require 'vendor/autoload.php';

$taxCalculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

echo "Iss: ".$taxCalculator->calculate($budget, new \App\BehaviourPattern\Tax\Iss()).PHP_EOL;

$budget->value = 200;
$budget->amountItems = 7;

$discountCalculator = new DiscountCalculator();

echo "Discount of: ".$discountCalculator->calculate($budget).PHP_EOL;