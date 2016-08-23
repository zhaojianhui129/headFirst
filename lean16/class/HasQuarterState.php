<?php
class HasQuarterState implements State
{
    public $randomWinner;
    public $gumballMachine;
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }
    public function insertQuater()
    {
        echo "您已经投入过硬币了<br>";
    }
    public function ejectQuarter()
    {
        echo "硬币已经退回<br>";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }
    public function turnCrank()
    {
        echo "正在转动...<br>";
        $this->randomWinner = rand(1,10);
        if ($this->randomWinner == 1 && $this->gumballMachine->getCount() > 1){
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        }else{
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }
    public function dispense()
    {
        echo "无法发放糖果<br>";
    }
}
