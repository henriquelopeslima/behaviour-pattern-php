<?php

namespace App\BehaviourPattern\ActionsWhenGeneratingOrder;

use App\BehaviourPattern\Order;

interface ActionsWhenGeneratingOrder
{
    public function execAction(Order $order);
}