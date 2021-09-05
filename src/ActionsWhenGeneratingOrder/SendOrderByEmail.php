<?php

namespace App\BehaviourPattern\ActionsWhenGeneratingOrder;

use SplObserver;
use SplSubject;

class SendOrderByEmail implements SplObserver
{
    public function update(SplSubject $subject) {
        if (!empty($subject->order)) {
            echo $subject->order->nameClient.PHP_EOL;
        }
        echo "Send order by email".PHP_EOL;
    }
}