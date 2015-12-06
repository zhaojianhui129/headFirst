<?php
class DuckModel  extends Duck{
    public function __construct(){
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }
    public function display(){
        echo '我是一只模型鸭；<br>';
    }
}