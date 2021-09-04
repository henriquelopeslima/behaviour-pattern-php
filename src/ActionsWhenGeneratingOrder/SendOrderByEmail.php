<?php

namespace App\BehaviourPattern\ActionsWhenGeneratingOrder;

use App\BehaviourPattern\Order;

class SendOrderByEmail
{
    public function execAction(Order $order) {
        echo "Send order by email";
    }
}