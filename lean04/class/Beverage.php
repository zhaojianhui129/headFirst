<?php
/**
 * 饮料抽象类
 * @author 建辉
 *
 */
abstract class Beverage{
    protected $description = "未知饮料";
    public function getDescription(){
        return $this->description;
    }
    abstract function cost();
}