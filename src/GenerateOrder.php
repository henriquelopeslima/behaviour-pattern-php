<?php

namespace App\BehaviourPattern;

class GenerateOrder
{
    private float $valueBudget;
    private int $numberItems;
    private string $nameClient;

    public function __construct(float $valueBudget, int $numberItems, string $nameClient)
    {
        $this->valueBudget = $valueBudget;
        $this->numberItems = $numberItems;
        $this->nameClient = $nameClient;
    }

    public function getValueBudget(): float
    {
        return $this->valueBudget;
    }

    public function setValueBudget(float $valueBudget): void
    {
        $this->valueBudget = $valueBudget;
    }

    public function getNumberItems(): int
    {
        return $this->numberItems;
    }

    public function setNumberItems(int $numberItems): void
    {
        $this->numberItems = $numberItems;
    }

    public function getNameClient(): string
    {
        return $this->nameClient;
    }

    public function setNameClient(string $nameClient): void
    {
        $this->nameClient = $nameClient;
    }
}