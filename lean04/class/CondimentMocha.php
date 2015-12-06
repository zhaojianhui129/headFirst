<?php
/**
 * 摩卡装饰者，即摩卡调料
 * @author 建辉
 *
 */
class CondimentMocha extends CondimentDecorator{
    private $beverage;
    public function __construct(Beverage $beverage){
        $this->beverage = $beverage;
    }
    public function getDescription(){
        return $this->beverage->getDescription() . ", 摩卡";
    }
    public function cost(){
        return 0.20 + $this->beverage->cost();
    }
}