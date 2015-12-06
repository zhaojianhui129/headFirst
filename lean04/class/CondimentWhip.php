<?php
/**
 * 奶泡
 * @author 建辉
 *
 */
class CondimentWhip extends CondimentDecorator{
    private $beverage;
    public function __construct(Beverage $beverage){
        $this->beverage = $beverage;
    }
    public function getDescription(){
        return $this->beverage->getDescription() . ", 奶泡";
    }
    public function cost(){
        return 0.10 + $this->beverage->cost();
    }
}