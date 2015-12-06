<?php
/**
 * 浓缩咖啡
 * @author 建辉
 *
 */
class BeverageEspresso extends Beverage{
    public function __construct(){
        $this->description = "浓咖啡";
    }
    public function cost(){
        return 1.99;
    }
}