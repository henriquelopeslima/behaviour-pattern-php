<?php

namespace App\BehaviourPattern\ActionsWhenGeneratingOrder;

use App\BehaviourPattern\Order;

class LogGenerateOrder
{
    public function execAction(Order $order) {
        echo "Created log for generate order in bank";
    }
}