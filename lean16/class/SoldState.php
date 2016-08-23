<?php
class SoldState implements State
{
    public $gumballMachine;
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }
    public function insertQuater()
    {
        echo "请等待，正在给你发放糖果<br>";
    }
    public function ejectQuarter()
    {
        echo "抱歉，你已经转动曲柄<br>";
    }
    public function turnCrank()
    {
        echo "别想骗过机器拿两次糖果<br>";
    }
    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0){
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        }else{
            echo "糟糕，糖果售罄了!<br>";
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }
}
