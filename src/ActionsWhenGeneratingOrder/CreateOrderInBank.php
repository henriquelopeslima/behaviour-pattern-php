<?php

namespace App\BehaviourPattern\ActionsWhenGeneratingOrder;

use SplObserver;
use SplSubject;

class CreateOrderInBank implements SplObserver
{
    public function update(SplSubject $subject) {
        echo "Created order in bank".PHP_EOL;
    }
}