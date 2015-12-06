<?php
/**
 * 深焙咖啡
 * @author 建辉
 *
 */
class BeverageDarkRoast extends Beverage{
    public function __construct(){
        $this->description = "深焙咖啡";
    }
    public function cost(){
        return 0.99;
    }
}