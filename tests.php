<?php

use App\BehaviourPattern\Budget;
use App\BehaviourPattern\TaxCalculator;

require 'vendor/autoload.php';

$taxCalculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

echo $taxCalculator->calculate($budget, new \App\BehaviourPattern\Tax\Iss()).PHP_EOL;
