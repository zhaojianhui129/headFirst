<?php
/**
 * 豆浆
 * @author 建辉
 *
 */
class CondimentSoy extends CondimentDecorator{
    private $beverage;
    public function __construct(Beverage $beverage){
        $this->beverage = $beverage;
    }
    public function getDescription(){
        return $this->beverage->getDescription() . ", 豆浆";
    }
    public function cost(){
        return 0.15 + $this->beverage->cost();
    }
}