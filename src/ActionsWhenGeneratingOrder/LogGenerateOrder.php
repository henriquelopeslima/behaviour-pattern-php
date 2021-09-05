<?php

namespace App\BehaviourPattern\ActionsWhenGeneratingOrder;

use SplObserver;
use SplSubject;

class LogGenerateOrder implements SplObserver
{
    public function update(SplSubject $subject) {
        echo "Created log for generate order in bank".PHP_EOL;
    }
}