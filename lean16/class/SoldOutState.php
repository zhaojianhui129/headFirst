<?php
class SoldOutState implements State
{
    public $gumballMachine;
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }
    public function insertQuater()
    {
        echo "糖果售罄，您不能投入硬币了<br>";
    }
    public function ejectQuarter()
    {
        echo "你还未投入硬币，不能退币<br>";
    }
    public function turnCrank()
    {
        echo "已转动，但是没有糖果<br>";
    }
    public function dispense()
    {
        echo "没有糖果发放<br>";
    }
}