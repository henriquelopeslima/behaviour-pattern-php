<?php

namespace App\BehaviourPattern\ActionsWhenGeneratingOrder;

use App\BehaviourPattern\Order;

class CreateOrderInBank implements ActionsWhenGeneratingOrder
{
    public function execAction(Order $order) {
        echo "Created order in bank".PHP_EOL;
    }
}