<?php

require_once 'vendor/autoload.php';

use App\BehaviourPattern\Budget;

$listBudgets = [];

$budget1 = new Budget();
$budget1->amountItems = 7;
$budget1->approve();
$budget1->value = 1500.75;

$budget2 = new Budget();
$budget2->amountItems = 10;
$budget2->reprove();
$budget2->value = 500;

$budget3 = new Budget();
$budget3->amountItems = 5;
$budget3->approve();
$budget3->finish();
$budget3->value = 1500.75;

$listBudgets = new \App\BehaviourPattern\ListBudgets();
$listBudgets->addBudget($budget1);
$listBudgets->addBudget($budget2);
$listBudgets->addBudget($budget3);

foreach ($listBudgets as $budget) {
    echo "Value ".$budget->value.PHP_EOL;
    echo "State ".get_class($budget->stateCurrent).PHP_EOL;
    echo "Amount items ".$budget->amountItems.PHP_EOL;
    echo PHP_EOL;
}

echo "Filter by state finished".PHP_EOL;

foreach ($listBudgets->budgetsFinishers() as $budget) {
    echo "Value ".$budget->value.PHP_EOL;
    echo "State ".get_class($budget->stateCurrent).PHP_EOL;
    echo "Amount items ".$budget->amountItems.PHP_EOL;
    echo PHP_EOL;
}