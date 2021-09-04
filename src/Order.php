<?php

namespace App\BehaviourPattern;

use DateTimeInterface;

class Order
{
    public string $nameClient;
    public DateTimeInterface $dateEnding;
    public Budget $budget;


}