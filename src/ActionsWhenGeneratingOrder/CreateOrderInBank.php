<?php

namespace App\BehaviourPattern\ActionsWhenGeneratingOrder;

use App\BehaviourPattern\Order;

class CreateOrderInBank
{
    public function execAction(Order $order) {
        echo "Created order in bank";
    }
}