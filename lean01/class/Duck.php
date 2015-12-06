<?php
/**
 * 定义鸭子基类
 * @author 建辉
 *
 */
abstract class Duck{
    protected $quackBehavior;
    protected $flyBehavior;
    /**
     * 显示，抽象方法
     */
    abstract function display();
    
    /**
     * 咕咕叫行为
     */
    public function performQuack()
    {
        $this->quackBehavior->quacking();
    }
    /**
     * 设置咕咕叫行为
     * @param object $fb
     */
    public function setQuackBehavior($qb){
        $this->quackBehavior = $qb;
    }
    /**
     * 飞的行为
     */
    public function performFly(){
        $this->flyBehavior->fly();
    }
    /**
     * 设置飞行行为类
     * @param object $fb
     */
    public function setFlyBehavior($fb){
        $this->flyBehavior = $fb;
    }
    public function swim(){
        echo 'All ducks float, enent decoys!<br>';
    }
}
