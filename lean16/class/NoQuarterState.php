<?php
/**
 * 无硬币状态类
 * @author qianxun
 *
 */
class NoQuarterState implements State
{
    public $gumballMachine;
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }
    public function insertQuater()
    {
        echo "您投入了一个硬币<br>";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }
    public function ejectQuarter()
    {
        echo "您还未投入硬币,不能要求退币<br>";
    }
    public function turnCrank()
    {
        echo "没有硬币您要求转动曲柄无效<br>";
    }
    public function dispense()
    {
        echo "你得先投入硬币才行<br>";
    }
}
