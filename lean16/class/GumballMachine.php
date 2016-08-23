<?php
class GumballMachine
{
    protected $soldOutState;
    protected $noQuarterState;
    protected $hasQuarterState;
    protected $soldState;
    protected $winnerState;
    
    protected $state;
    protected $count = 0;
    /**
     * 初始化各个状态
     * @param number $numberGumball
     */
    public function __construct($numberGumball)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);
        
        $this->state = $this->soldOutState;
        $this->count = $numberGumball;
        if ($numberGumball >0){
            $this->state = $this->noQuarterState;
        }
    }
    /**
     * 投入硬币
     */
    public function insertQuarter()
    {
        $this->state->insertQuater();
    }
    /**
     * 退币
     */
    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }
    /**
     * 转动曲柄
     */
    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }
    /**
     * 设置糖果机状态
     * @param State $state
     */
    public function setState(State $state)
    {
        $this->state = $state;
    }
    /**
     * 减少糖果
     */
    public function releaseBall()
    {
        echo "一个糖果出来了。。。<br>";
        if ($this->count != 0){
            $this->count--;
        }
    }
    /**
     * 重新填入糖果
     * @param unknown $count
     */
    public function refill($count)
    {
        $this->count = $count;
        $this->state = $this->noQuarterState;
    }
    public function getCount()
    {
        return $this->count;
    }
    public function getSoldOutState()
    {
        return $this->soldOutState;
    }
    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }
    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }
    public function getSoldState()
    {
        return $this->soldState;
    }
    public function getWinnerState()
    {
        return $this->winnerState;
    }
}
