<?php
/**
 * 牛奶调料
 * @author 建辉
 *
 */
class CondimentMilk extends CondimentDecorator{
    private $beverage;
    public function __construct(Beverage $beverage){
        $this->beverage = $beverage;
    }
    public function getDescription(){
        return $this->beverage->getDescription() . ", 牛奶";
    }
    public function cost(){
        return 0.10 + $this->beverage->cost();
    }
}