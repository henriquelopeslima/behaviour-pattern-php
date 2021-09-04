<?php

namespace App\BehaviourPattern\ActionsWhenGeneratingOrder;

use App\BehaviourPattern\Order;

class SendOrderByEmail implements  ActionsWhenGeneratingOrder
{
    public function execAction(Order $order) {
        echo "Send order by email".PHP_EOL;
    }
}