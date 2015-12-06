<?php
class DuckMallard extends Duck{
    public function __construct(){
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }
    public function display(){
        echo "我是一个真正的野鸭!<br>";
    }
}